<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Tests\Feature;

use DateTimeImmutable;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Vlsv\SberPayQrApiClient\Entity\RequestRegistry;
use Vlsv\SberPayQrApiClient\Tests\TestCaseBase;

class RequestRegistryTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/RequestRegistry.json');

        /** @var RequestRegistry $requestRegistry */
        $requestRegistry = $this->serializer->deserialize(
            $json,
            RequestRegistry::class,
            JsonEncoder::FORMAT
        );

        self::assertInstanceOf(RequestRegistry::class, $requestRegistry);
        self::assertInstanceOf(DateTimeImmutable::class, $requestRegistry->getRqTm());
        self::assertInstanceOf(DateTimeImmutable::class, $requestRegistry->getStartPeriod());
        self::assertInstanceOf(DateTimeImmutable::class, $requestRegistry->getEndPeriod());

        self::assertJsonStringEqualsJsonString(
            $json,
            $this->serializer->serialize($requestRegistry, JsonEncoder::FORMAT)
        );
    }
}
