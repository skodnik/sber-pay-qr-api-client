<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use Symfony\Component\Serializer\Annotation\SerializedName;

class ResponseRegistryRegistryDataOrderParamsOrderOperationParams
{
    /**
     * Параметры операции. Отдаем информацию только по успешным операциям.
     *
     * @var ResponseRegistryRegistryDataOrderParamsOrderOperationParamsOrderOperationParam[] $orderOperationParam
     * @SerializedName("orderOperationParam")
     */
    private array $orderOperationParam;

    public function getOrderOperationParam(): array
    {
        return $this->orderOperationParam;
    }

    public function setOrderOperationParam(array $orderOperationParam): ResponseRegistryRegistryDataOrderParamsOrderOperationParams {
        $this->orderOperationParam = $orderOperationParam;

        return $this;
    }
}
