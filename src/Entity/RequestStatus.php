<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;

class RequestStatus implements RequestInterface
{
    /** Уникальный идентификатор запроса. */
    private string $rqUid;

    /** Дата/Время формирования запроса. */
    private DateTimeImmutable $rqTm;

    /** ID заказа в АС ППРБ.Карты*/
    private string $orderId;

    /** Уникальный идентификатор терминала (добавляется в API v2.0.0). */
    private string $tid;

    /** Номер заказа в CRM Клиента (добавляется в API v2.0.0). */
    private string $partnerOrderNumber;

    public function getRqUid(): string
    {
        return $this->rqUid;
    }

    public function setRqUid(string $rqUid): RequestStatus
    {
        $this->rqUid = $rqUid;

        return $this;
    }

    public function getRqTm(): DateTimeImmutable
    {
        return $this->rqTm;
    }

    public function setRqTm(DateTimeImmutable $rqTm): RequestStatus
    {
        $this->rqTm = $rqTm;

        return $this;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): RequestStatus
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getTid(): string
    {
        return $this->tid;
    }

    public function setTid(string $tid): RequestStatus
    {
        $this->tid = $tid;

        return $this;
    }

    public function getPartnerOrderNumber(): string
    {
        return $this->partnerOrderNumber;
    }

    public function setPartnerOrderNumber(string $partnerOrderNumber): RequestStatus
    {
        $this->partnerOrderNumber = $partnerOrderNumber;

        return $this;
    }
}
