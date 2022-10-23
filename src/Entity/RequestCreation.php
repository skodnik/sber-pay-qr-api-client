<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;

class RequestCreation implements RequestInterface
{
    /** Уникальный идентификатор запроса. */
    private string $rqUid;

    /** Дата/Время формирования запроса. */
    private DateTimeImmutable $rqTm;

    /** Идентификатор клиента. */
    private string $memberId;

    /** Номер заказа в CRM Клиента. */
    private string $orderNumber;

    /** Дата/время формирования заказа. */
    private DateTimeImmutable $orderCreateDate;

    /** @var RequestCreationOrderParamsType[] Описание блока с параметрами заказа. */
    private array $orderParamsType;

    /** IdQR устройства или tid Уникальный идентификатор терминала для СБП, на котором сформирован заказ. */
    private string $idQr;

    /** Сумма заказа в минимальных единицах Валюты. */
    private int $orderSum;

    /** Валюта операции, цифровой код по ISO 4217 */
    private string $currency;

    /** Описание заказа. */
    private string $description;

    /** Идентификатор банка-участника ПАО СберБанк в СБП.
     * Используется в случае проведения операции через платежную систему СБП/НСПК. Константа: 100000000111 (добавляется
     * в API v3.0.0).
     */
    private string $sbpMemberId;

    public function getRqUid(): string
    {
        return $this->rqUid;
    }

    public function setRqUid(string $rqUid): RequestCreation
    {
        $this->rqUid = $rqUid;

        return $this;
    }

    public function getRqTm(): DateTimeImmutable
    {
        return $this->rqTm;
    }

    public function setRqTm(DateTimeImmutable $rqTm): RequestCreation
    {
        $this->rqTm = $rqTm;

        return $this;
    }

    public function getMemberId(): string
    {
        return $this->memberId;
    }

    public function setMemberId(string $memberId): RequestCreation
    {
        $this->memberId = $memberId;

        return $this;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(string $orderNumber): RequestCreation
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function getOrderCreateDate(): DateTimeImmutable
    {
        return $this->orderCreateDate;
    }

    public function setOrderCreateDate(DateTimeImmutable $orderCreateDate): RequestCreation
    {
        $this->orderCreateDate = $orderCreateDate;

        return $this;
    }

    public function getOrderParamsType(): array
    {
        return $this->orderParamsType;
    }

    public function setOrderParamsType(array $orderParamsType): RequestCreation
    {
        $this->orderParamsType = $orderParamsType;

        return $this;
    }

    public function getIdQr(): string
    {
        return $this->idQr;
    }

    public function setIdQr(string $idQr): RequestCreation
    {
        $this->idQr = $idQr;

        return $this;
    }

    public function getOrderSum(): int
    {
        return $this->orderSum;
    }

    public function setOrderSum(int $orderSum): RequestCreation
    {
        $this->orderSum = $orderSum;

        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): RequestCreation
    {
        $this->currency = $currency;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): RequestCreation
    {
        $this->description = $description;

        return $this;
    }

    public function getSbpMemberId(): string
    {
        return $this->sbpMemberId;
    }

    public function setSbpMemberId(string $sbpMemberId): RequestCreation
    {
        $this->sbpMemberId = $sbpMemberId;

        return $this;
    }
}
