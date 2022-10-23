<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Tests\Feature;

use DateTimeImmutable;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Vlsv\SberPayQrApiClient\Entity\RequestRevoke;
use Vlsv\SberPayQrApiClient\Tests\TestCaseBase;

class RequestRevokeTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/RequestRevoke.json');

        /** @var RequestRevoke $requestRevoke */
        $requestRevoke = $this->serializer->deserialize(
            $json,
            RequestRevoke::class,
            JsonEncoder::FORMAT
        );

        self::assertInstanceOf(RequestRevoke::class, $requestRevoke);
        self::assertInstanceOf(DateTimeImmutable::class, $requestRevoke->getRqTm());

        self::assertJsonStringEqualsJsonString(
            $json,
            $this->serializer->serialize($requestRevoke, JsonEncoder::FORMAT)
        );
    }
}
