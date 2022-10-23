<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Tests\Feature;

use DateTimeImmutable;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Vlsv\SberPayQrApiClient\Entity\ResponseRegistry;
use Vlsv\SberPayQrApiClient\Entity\ResponseRegistryRegistryData;
use Vlsv\SberPayQrApiClient\Entity\ResponseRegistryRegistryDataOrderParams;
use Vlsv\SberPayQrApiClient\Entity\ResponseRegistryRegistryDataOrderParamsOrderOperationParams;
use Vlsv\SberPayQrApiClient\Entity\ResponseRegistryRegistryDataOrderParamsOrderOperationParamsOrderOperationParam;
use Vlsv\SberPayQrApiClient\Entity\ResponseRegistryRegistryDataOrderParamsOrderParam;
use Vlsv\SberPayQrApiClient\Tests\TestCaseBase;

class ResponseRegistryTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/ResponseRegistry.json');

        /** @var ResponseRegistry $responseRegistry */
        $responseRegistry = $this->serializer->deserialize(
            $json,
            ResponseRegistry::class,
            JsonEncoder::FORMAT
        );

        self::assertInstanceOf(ResponseRegistry::class, $responseRegistry);
        self::assertInstanceOf(DateTimeImmutable::class, $responseRegistry->getRqTm());
        self::assertInstanceOf(ResponseRegistryRegistryData::class, $responseRegistry->getRegistryData());
        self::assertInstanceOf(
            ResponseRegistryRegistryDataOrderParams::class,
            $responseRegistry->getRegistryData()->getOrderParams()
        );

        foreach (
            $responseRegistry->getRegistryData()->getOrderParams()->getOrderParam() as $dataOrderParamsOrderParam
        ) {
            self::assertInstanceOf(
                ResponseRegistryRegistryDataOrderParamsOrderParam::class,
                $dataOrderParamsOrderParam
            );
            self::assertInstanceOf(DateTimeImmutable::class, $dataOrderParamsOrderParam->getOrderCreateDate());
            self::assertInstanceOf(
                ResponseRegistryRegistryDataOrderParamsOrderOperationParams::class,
                $dataOrderParamsOrderParam->getOrderOperationParams()
            );

            foreach (
                $dataOrderParamsOrderParam->getOrderOperationParams()->getOrderOperationParam(
                ) as $dataOrderParamsOrderOperationParamsOrderOperationParam
            ) {
                self::assertInstanceOf(
                    ResponseRegistryRegistryDataOrderParamsOrderOperationParamsOrderOperationParam::class,
                    $dataOrderParamsOrderOperationParamsOrderOperationParam
                );
            }
        }
        self::assertJsonStringEqualsJsonString(
            $json,
            $this->serializer->serialize($responseRegistry, JsonEncoder::FORMAT)
        );
    }
}
