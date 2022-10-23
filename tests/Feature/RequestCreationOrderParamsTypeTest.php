<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Tests\Feature;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Vlsv\SberPayQrApiClient\Entity\RequestCreation;
use Vlsv\SberPayQrApiClient\Entity\RequestCreationOrderParamsType;
use Vlsv\SberPayQrApiClient\Tests\TestCaseBase;

class RequestCreationOrderParamsTypeTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/RequestCreationOrderParamsType.json');

        /** @var RequestCreation $requestCreation */
        $requestCreation = $this->serializer->deserialize(
            $json,
            RequestCreationOrderParamsType::class,
            JsonEncoder::FORMAT
        );

        self::assertInstanceOf(RequestCreationOrderParamsType::class, $requestCreation);

        self::assertJsonStringEqualsJsonString(
            $json,
            $this->serializer->serialize($requestCreation, JsonEncoder::FORMAT)
        );
    }
}
