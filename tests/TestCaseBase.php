<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Serializer;
use Vlsv\SberPayQrApiClient\ApiClient;
use Vlsv\SberPayQrApiClient\ClientConfig;
use Vlsv\SberPayQrApiClient\Factory\SerializerFactory;

class TestCaseBase extends TestCase
{
    protected Serializer $serializer;
    protected string $samplesDirPath = __DIR__ . '/../var/samples';
    protected ApiClient $apiClient;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->serializer = SerializerFactory::getSerializer();

        $config = new ClientConfig(
            certPath: getenv('CERT_PATH'),
            certPassword: getenv('CERT_PASSWORD'),
            host: getenv('HOST')
        );
        $this->apiClient = new ApiClient(
            config: $config,
            serializer: $this->serializer
        );
    }
}
