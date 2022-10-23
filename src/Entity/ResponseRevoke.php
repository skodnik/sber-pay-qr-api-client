<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;

class ResponseRevoke implements ResponseInterface
{
    /** Уникальный идентификатор запроса*/
    private string $rqUid;

    /** Дата/Время формирования запроса*/
    private DateTimeImmutable $rqTm;

    /** ID заказа в АС ППРБ.Карты*/
    private string $orderId;

    /** Статус заказа*/
    private string $orderState;

    /** Код выполнения запроса*/
    private string $errorCode;

    /** Описание ошибки выполнения запроса*/
    private string $errorDescription;

    public function getRqUid(): string
    {
        return $this->rqUid;
    }

    public function setRqUid(string $rqUid): ResponseRevoke
    {
        $this->rqUid = $rqUid;

        return $this;
    }

    public function getRqTm(): DateTimeImmutable
    {
        return $this->rqTm;
    }

    public function setRqTm(DateTimeImmutable $rqTm): ResponseRevoke
    {
        $this->rqTm = $rqTm;

        return $this;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): ResponseRevoke
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getOrderState(): string
    {
        return $this->orderState;
    }

    public function setOrderState(string $orderState): ResponseRevoke
    {
        $this->orderState = $orderState;

        return $this;
    }

    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    public function setErrorCode(string $errorCode): ResponseRevoke
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    public function getErrorDescription(): string
    {
        return $this->errorDescription;
    }

    public function setErrorDescription(string $errorDescription): ResponseRevoke
    {
        $this->errorDescription = $errorDescription;

        return $this;
    }
}
