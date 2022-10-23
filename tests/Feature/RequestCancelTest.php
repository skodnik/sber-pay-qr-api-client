<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Tests\Feature;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Vlsv\SberPayQrApiClient\Entity\RequestCancel;
use Vlsv\SberPayQrApiClient\Tests\TestCaseBase;

class RequestCancelTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/RequestCancel.json');

        /** @var RequestCancel $requestCancel */
        $requestCancel = $this->serializer->deserialize(
            $json,
            RequestCancel::class,
            JsonEncoder::FORMAT
        );

        self::assertInstanceOf(RequestCancel::class, $requestCancel);

        self::assertJsonStringEqualsJsonString(
            $json,
            $this->serializer->serialize($requestCancel, JsonEncoder::FORMAT)
        );
    }
}
