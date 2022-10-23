<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;

class ResponseCreation implements ResponseInterface
{
    /** Уникальный идентификатор запроса. */
    private string $rqUid;

    /** Дата/Время формирования запроса. */
    private DateTimeImmutable $rqTm;

    /** Номер заказа в CRM Клиента. */
    private string $orderNumber;

    /** ID заказа в АС ППРБ.Карты. */
    private string $orderId;

    /** Статус заказа. */
    private string $orderState;

    /** Ссылка на считывание QR code. */
    private string $orderFormUrl;

    /** Код выполнения запроса. */
    private string $errorCode;

    /** Описание ошибки выполнения запроса. */
    private string $errorDescription;

    public function getRqUid(): string
    {
        return $this->rqUid;
    }

    public function setRqUid(string $rqUid): ResponseCreation
    {
        $this->rqUid = $rqUid;

        return $this;
    }

    public function getRqTm(): DateTimeImmutable
    {
        return $this->rqTm;
    }

    public function setRqTm(DateTimeImmutable $rqTm): ResponseCreation
    {
        $this->rqTm = $rqTm;

        return $this;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(string $orderNumber): ResponseCreation
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): ResponseCreation
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getOrderState(): string
    {
        return $this->orderState;
    }

    public function setOrderState(string $orderState): ResponseCreation
    {
        $this->orderState = $orderState;

        return $this;
    }

    public function getOrderFormUrl(): string
    {
        return $this->orderFormUrl;
    }

    public function setOrderFormUrl(string $orderFormUrl): ResponseCreation
    {
        $this->orderFormUrl = $orderFormUrl;

        return $this;
    }

    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    public function setErrorCode(string $errorCode): ResponseCreation
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    public function getErrorDescription(): string
    {
        return $this->errorDescription;
    }

    public function setErrorDescription(string $errorDescription): ResponseCreation
    {
        $this->errorDescription = $errorDescription;

        return $this;
    }
}
