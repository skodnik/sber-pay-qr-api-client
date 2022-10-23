<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;
use Symfony\Component\Serializer\Annotation\SerializedName;

class RequestRegistry implements RequestInterface
{
    /**
     * Уникальный идентификатор запроса.
     *
     * @SerializedName("rqUid")
     */
    private string $rqUid;

    /**
     * ДатаВремя формирования запроса.
     *
     * @SerializedName("rqTm")
     */
    private DateTimeImmutable $rqTm;

    /**
     * IdQR устройства или tid Уникальный идентификатор терминала для СБП, на котором сформирован заказ.
     *
     * @SerializedName("idQR")
     */
    private string $idQR;

    /**
     * Дата/время начала периода: дата создания заказа в АС Банка (ППРБ Ecom) по Мск.
     *
     * @SerializedName("startPeriod")
     */
    private DateTimeImmutable $startPeriod;

    /**
     * Дата/время конца периода: дата создания заказа в АС Банка (ППРБ Ecom) по Мск.
     *
     * @SerializedName("endPeriod")
     */
    private DateTimeImmutable $endPeriod;

    /**
     * Тип реестра. Возможные значения: QUANTITY/REGISTRY. Где QUANTITY – агрегация по количеству операций, сумме.
     * REGISTRY - детальный отчет по заказам.
     *
     * @SerializedName("registryType")
     */
    private RegistryType $registryType;

    public function getRqUid(): string
    {
        return $this->rqUid;
    }

    public function setRqUid(string $rqUid): RequestRegistry
    {
        $this->rqUid = $rqUid;

        return $this;
    }

    public function getRqTm(): DateTimeImmutable
    {
        return $this->rqTm;
    }

    public function setRqTm(DateTimeImmutable $rqTm): RequestRegistry
    {
        $this->rqTm = $rqTm;

        return $this;
    }

    public function getIdQR(): string
    {
        return $this->idQR;
    }

    public function setIdQR(string $idQR): RequestRegistry
    {
        $this->idQR = $idQR;

        return $this;
    }

    public function getStartPeriod(): DateTimeImmutable
    {
        return $this->startPeriod;
    }

    public function setStartPeriod(DateTimeImmutable $startPeriod): RequestRegistry
    {
        $this->startPeriod = $startPeriod;

        return $this;
    }

    public function getEndPeriod(): DateTimeImmutable
    {
        return $this->endPeriod;
    }

    public function setEndPeriod(DateTimeImmutable $endPeriod): RequestRegistry
    {
        $this->endPeriod = $endPeriod;

        return $this;
    }

    public function getRegistryType(): RegistryType
    {
        return $this->registryType;
    }

    public function setRegistryType(RegistryType $registryType): RequestRegistry
    {
        $this->registryType = $registryType;

        return $this;
    }

}
