<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;
use Symfony\Component\Serializer\Annotation\SerializedName;

class ResponseRegistry implements ResponseInterface
{
    /**
     * Уникальный идентификатор запроса.
     *
     * @SerializedName("rqUid")
     */
    private string $rqUid;

    /** ДатаВремя формирования запроса.
     *
     * @SerializedName("rqTm")
     */
    private DateTimeImmutable $rqTm;

    /**
     * Уникальный идентификатор терминала.
     *
     * @SerializedName("tid")
     */
    private string $tid;

    /**
     * IdQR устройства или tid Уникальный идентификатор терминала для СБП, на котором сформирован заказ.
     *
     * @SerializedName("idQR")
     */
    private string $idQR;

    /**
     * Заполняется в случае, если в запросе RegistryType = QUANTITY.
     *
     * @SerializedName("quantityData")
     */
    private ResponseRegistryQuantityData $quantityData;

    /**
     * Код выполнения запроса.
     *
     * @SerializedName("errorCode")
     */
    private string $errorCode;

    /**
     * Описание ошибки выполнения запроса.
     *
     * @SerializedName("errorDescription")
     */
    private string $errorDescription;

    /**
     * Заполняется в случае, если в запросе RegistryType = REGISTRY.
     *
     * @SerializedName("registryData")
     */
    private ResponseRegistryRegistryData $registryData;

    public function getRqUid(): string
    {
        return $this->rqUid;
    }

    public function setRqUid(string $rqUid): ResponseRegistry
    {
        $this->rqUid = $rqUid;

        return $this;
    }

    public function getRqTm(): DateTimeImmutable
    {
        return $this->rqTm;
    }

    public function setRqTm(DateTimeImmutable $rqTm): ResponseRegistry
    {
        $this->rqTm = $rqTm;

        return $this;
    }

    public function getTid(): string
    {
        return $this->tid;
    }

    public function setTid(string $tid): ResponseRegistry
    {
        $this->tid = $tid;

        return $this;
    }

    public function getIdQR(): string
    {
        return $this->idQR;
    }

    public function setIdQR(string $idQR): ResponseRegistry
    {
        $this->idQR = $idQR;

        return $this;
    }

    public function getQuantityData(): ResponseRegistryQuantityData
    {
        return $this->quantityData;
    }

    public function setQuantityData(ResponseRegistryQuantityData $quantityData): ResponseRegistry
    {
        $this->quantityData = $quantityData;

        return $this;
    }

    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    public function setErrorCode(string $errorCode): ResponseRegistry
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    public function getErrorDescription(): string
    {
        return $this->errorDescription;
    }

    public function setErrorDescription(string $errorDescription): ResponseRegistry
    {
        $this->errorDescription = $errorDescription;

        return $this;
    }

    public function getRegistryData(): ResponseRegistryRegistryData
    {
        return $this->registryData;
    }

    public function setRegistryData(ResponseRegistryRegistryData $registryData): ResponseRegistry
    {
        $this->registryData = $registryData;

        return $this;
    }
}
