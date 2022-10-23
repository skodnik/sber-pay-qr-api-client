<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Tests\Feature;

use DateTimeImmutable;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Vlsv\SberPayQrApiClient\Entity\ResponseRevoke;
use Vlsv\SberPayQrApiClient\Tests\TestCaseBase;

class ResponseRevokeTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/ResponseRevoke.json');

        /** @var ResponseRevoke $responseRevoke */
        $responseRevoke = $this->serializer->deserialize(
            $json,
            ResponseRevoke::class,
            JsonEncoder::FORMAT
        );

        self::assertInstanceOf(ResponseRevoke::class, $responseRevoke);
        self::assertInstanceOf(DateTimeImmutable::class, $responseRevoke->getRqTm());

        self::assertJsonStringEqualsJsonString(
            $json,
            $this->serializer->serialize($responseRevoke, JsonEncoder::FORMAT)
        );
    }
}
