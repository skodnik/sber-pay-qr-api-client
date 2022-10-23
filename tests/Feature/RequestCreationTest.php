<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Tests\Feature;

use DateTimeImmutable;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Vlsv\SberPayQrApiClient\Entity\RequestCreation;
use Vlsv\SberPayQrApiClient\Entity\RequestCreationOrderParamsType;
use Vlsv\SberPayQrApiClient\Tests\TestCaseBase;

class RequestCreationTest extends TestCaseBase
{
    public function samplesDataProvider(): array
    {
        return [
            'sber' => ['RequestOrderCreateQrRq.json'],
            'sbp' => ['RequestOrderCreateQrRqSBP.json'],
        ];
    }
    /** @dataProvider samplesDataProvider */
    public function test_deserializeSerialize(string $sampleFilename): void
    {
        $json = file_get_contents($this->samplesDirPath . '/' . $sampleFilename);

        /** @var RequestCreation $requestCreation */
        $requestCreation = $this->serializer->deserialize(
            $json,
            RequestCreation::class,
            JsonEncoder::FORMAT
        );

        self::assertInstanceOf(RequestCreation::class, $requestCreation);
        self::assertInstanceOf(DateTimeImmutable::class, $requestCreation->getRqTm());
        self::assertInstanceOf(DateTimeImmutable::class, $requestCreation->getOrderCreateDate());

        self::assertJsonStringEqualsJsonString(
            $json,
            $this->serializer->serialize($requestCreation, JsonEncoder::FORMAT)
        );

        foreach ($requestCreation->getOrderParamsType() as $orderParamsType) {
            self::assertInstanceOf(RequestCreationOrderParamsType::class, $orderParamsType);
        }
    }
}
