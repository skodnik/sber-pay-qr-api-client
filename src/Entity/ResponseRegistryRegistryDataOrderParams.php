<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use Symfony\Component\Serializer\Annotation\SerializedName;

class ResponseRegistryRegistryDataOrderParams
{
    /**
     * Перечень заказов.
     *
     * @var ResponseRegistryRegistryDataOrderParamsOrderParam[] $orderParam
     * @SerializedName("orderParam")
     */
    private array $orderParam;

    public function getOrderParam(): array
    {
        return $this->orderParam;
    }

    public function setOrderParam(array $orderParam): ResponseRegistryRegistryDataOrderParams
    {
        $this->orderParam = $orderParam;

        return $this;
    }
}
