<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use Symfony\Component\Serializer\Annotation\SerializedName;

class ResponseRegistryRegistryDataOrderParamsOrderOperationParamsSbpOperationParams
{
    /**
     * Идентификатор операции в СБП.
     *
     * @SerializedName("sbpOperationId")
     */
    private string $sbpOperationId;

    /**
     * Маскированный идентификатор плательщика.
     *
     * @SerializedName("sbpPayerId")
     */
    private string $sbpPayerId;

    public function getSbpOperationId(): string
    {
        return $this->sbpOperationId;
    }

    public function setSbpOperationId(string $sbpOperationId): ResponseRegistryRegistryDataOrderParamsOrderOperationParamsSbpOperationParams
    {
        $this->sbpOperationId = $sbpOperationId;

        return $this;
    }

    public function getSbpPayerId(): string
    {
        return $this->sbpPayerId;
    }

    public function setSbpPayerId(string $sbpPayerId): ResponseRegistryRegistryDataOrderParamsOrderOperationParamsSbpOperationParams
    {
        $this->sbpPayerId = $sbpPayerId;

        return $this;
    }
}
