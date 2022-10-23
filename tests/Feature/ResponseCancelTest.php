<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Tests\Feature;

use DateTimeImmutable;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Vlsv\SberPayQrApiClient\Entity\RequestCancel;
use Vlsv\SberPayQrApiClient\Entity\ResponseCancel;
use Vlsv\SberPayQrApiClient\Tests\TestCaseBase;

class ResponseCancelTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/ResponseCancel.json');

        /** @var RequestCancel $requestCancel */
        $requestCancel = $this->serializer->deserialize(
            $json,
            ResponseCancel::class,
            JsonEncoder::FORMAT
        );

        self::assertInstanceOf(ResponseCancel::class, $requestCancel);
        self::assertInstanceOf(DateTimeImmutable::class, $requestCancel->getRqTm());

        self::assertJsonStringEqualsJsonString(
            $json,
            $this->serializer->serialize($requestCancel, JsonEncoder::FORMAT)
        );
    }
}
