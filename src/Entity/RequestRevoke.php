<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;

class RequestRevoke implements RequestInterface
{
    /** Уникальный идентификатор запроса. */
    private string $rqUid;

    /** Дата/Время формирования запроса. */
    private DateTimeImmutable $rqTm;

    /** ID заказа в АС ППРБ.Карты. */
    private string $orderId;

    public function getRqUid(): string
    {
        return $this->rqUid;
    }

    public function setRqUid(string $rqUid): RequestRevoke
    {
        $this->rqUid = $rqUid;

        return $this;
    }

    public function getRqTm(): DateTimeImmutable
    {
        return $this->rqTm;
    }

    public function setRqTm(DateTimeImmutable $rqTm): RequestRevoke
    {
        $this->rqTm = $rqTm;

        return $this;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): RequestRevoke
    {
        $this->orderId = $orderId;

        return $this;
    }

}
