<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Tests\Integration;

use DateTimeImmutable;
use Exception;
use Vlsv\SberPayQrApiClient\Entity\ApiEndpoint;
use Vlsv\SberPayQrApiClient\Entity\RequestCreation;
use Vlsv\SberPayQrApiClient\Entity\RequestCreationOrderParamsType;
use Vlsv\SberPayQrApiClient\Entity\RequestStatus;
use Vlsv\SberPayQrApiClient\Entity\ResponseCreation;
use Vlsv\SberPayQrApiClient\Exception\ApiException;
use Vlsv\SberPayQrApiClient\Tests\TestCaseBase;

class ApiClientTest extends TestCaseBase
{
    /**
     * @throws Exception
     */
    public function test_creationCatchApiException()
    {
        $orderParamsType = (new RequestCreationOrderParamsType())
            ->setPositionName('test_position_name')
            ->setPositionCount(1)
            ->setPositionDescription('test_position_description')
            ->setPositionSum(190000);

        $requestCreation = (new RequestCreation())
            ->setMemberId(getenv('MEMBER_ID'))
            ->setOrderCreateDate(new DateTimeImmutable())
            ->setOrderParamsType([$orderParamsType]);

        try {
            $this->apiClient->makeRequest(
                accessToken: '7fe2a725-0912-47a1-80a7-398e77cfe936',
                apiEndpoint: ApiEndpoint::CREATION,
                requestObject: $requestCreation,
            );

            self::fail();
        } catch (ApiException $exception) {
            self::assertEquals(401, $exception->getCode());
        }
    }

    /**
     * @throws Exception
     */
    public function test_statusCatchApiException()
    {
        $requestStatus = (new RequestStatus())
            ->setOrderId('5cf8cb7b-37e3-42e9-8f69-306fa72e106f')
            ->setTid('83457dda-332c-46f4-b928-8d4bd9ee3afe');

        try {
            $this->apiClient->makeRequest(
                accessToken: '7fe2a725-0912-47a1-80a7-398e77cfe936',
                apiEndpoint: ApiEndpoint::STATUS,
                requestObject: $requestStatus,
            );

            self::fail();
        } catch (ApiException $exception) {
            self::assertEquals(401, $exception->getCode());
        }
    }

    public function test_OrderCreate(): void
    {
        $orderParamsType = (new RequestCreationOrderParamsType())
            ->setPositionName('Water Still')
            ->setPositionCount(1)
            ->setPositionDescription('Water Still Description')
            ->setPositionSum(100);

        $requestCreation = (new RequestCreation())
            ->setMemberId(getenv('MEMBER_ID'))
            ->setOrderNumber((string)rand(1, 99999))
            ->setOrderCreateDate(new DateTimeImmutable())
            ->setOrderParamsType([$orderParamsType])
            ->setIdQr(getenv('ID_QR'))
            ->setOrderSum(100)
            ->setCurrency("643")
            ->setDescription("Water Still Description")
            ->setSbpMemberId(getenv('SBP_MEMBER_ID'));

        $response = $this->apiClient->makeRequest(
            accessToken: 'ded97470-2ae9-4827-9dc0-548f249fbd3b',
            apiEndpoint: ApiEndpoint::CREATION,
            requestObject: $requestCreation,
        );

        self::assertInstanceOf(ResponseCreation::class, $response);

        echo $response->getOrderFormUrl();
    }
}
