<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use Symfony\Component\Serializer\Annotation\SerializedName;

class ResponseRegistryRegistryData
{
    /**
     * Заполняется в случае, если в запросе RegistryType = REGISTRY.
     *
     * @SerializedName("orderParams")
     */
    private ResponseRegistryRegistryDataOrderParams $orderParams;

    public function getOrderParams(): ResponseRegistryRegistryDataOrderParams
    {
        return $this->orderParams;
    }

    public function setOrderParams(ResponseRegistryRegistryDataOrderParams $orderParams): ResponseRegistryRegistryData
    {
        $this->orderParams = $orderParams;

        return $this;
    }
}
