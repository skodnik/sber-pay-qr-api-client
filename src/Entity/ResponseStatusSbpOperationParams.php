<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

class ResponseStatusSbpOperationParams
{
    /** Идентификатор операции в СБП. */
    private string $sbpOperationId;

    /** Маскированный идентификатор плательщика. */
    private string $sbpMaskedPayerId;

    public function getSbpOperationId(): string
    {
        return $this->sbpOperationId;
    }

    public function setSbpOperationId(string $sbpOperationId): ResponseStatusSbpOperationParams
    {
        $this->sbpOperationId = $sbpOperationId;

        return $this;
    }

    public function getSbpMaskedPayerId(): string
    {
        return $this->sbpMaskedPayerId;
    }

    public function setSbpMaskedPayerId(string $sbpMaskedPayerId): ResponseStatusSbpOperationParams
    {
        $this->sbpMaskedPayerId = $sbpMaskedPayerId;

        return $this;
    }
}
