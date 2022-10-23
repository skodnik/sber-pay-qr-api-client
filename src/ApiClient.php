<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient;

use DateTimeImmutable;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use Vlsv\SberPayQrApiClient\Entity\ApiEndpoint;
use Vlsv\SberPayQrApiClient\Entity\RequestInterface;
use Vlsv\SberPayQrApiClient\Entity\ResponseInterface;
use Vlsv\SberPayQrApiClient\Exception\ApiException;

class ApiClient
{
    public function __construct(
        protected ClientConfig $config,
        protected Serializer $serializer,
        protected Client $client = new Client(),
    ) {
    }

    /**
     * @throws ApiException
     * @throws Exception
     */
    public function makeRequest(
        string $accessToken,
        ApiEndpoint $apiEndpoint,
        RequestInterface $requestObject,
        string $rqUID = '',
    ): ResponseInterface {
        $requestObject
            ->setRqUid($rqUID ?: $this->getRqUID())
            ->setRqTm(new DateTimeImmutable());

        $request = new Request('POST', $this->config->getHost() . $apiEndpoint->getResourcePath());
        $requestOptions = [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'RqUID' => $requestObject->getRqUid(),
            ],
            'body' => $this->serializer->serialize(
                data: $requestObject,
                format: JsonEncoder::FORMAT,
            ),
        ];

        if ($this->config->getCertPath()) {
            $requestOptions['cert'] = [
                $this->config->getCertPath(),
                $this->config->getCertPassword(),
            ];
        }

        try {
            $response = $this->client->send($request, $requestOptions);
        } catch (GuzzleException $exception) {
            throw new ApiException(
                '[' . $exception->getCode() . '] ' . $exception->getMessage(),
                $exception->getCode(),
                $exception,
            );
        }

        if ($response->getStatusCode() !== 200) {
            throw new ApiException(
                '[' . $response->getStatusCode() . '] ' . 'Unknown response',
                $response->getStatusCode(),
            );
        }

        /** @var ResponseInterface $responseObject */
        $responseObject =  $this->serializer->deserialize(
            data: $response->getBody()->getContents(),
            type: $apiEndpoint->getResponseClassName(),
            format: JsonEncoder::FORMAT
        );

        return $responseObject;
    }

    /**
     * @throws Exception
     */
    public function getRqUID(): string
    {
        return bin2hex(random_bytes(16));
    }
}
