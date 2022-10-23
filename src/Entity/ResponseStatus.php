<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;

class ResponseStatus implements ResponseInterface
{
    /** Уникальный идентификатор запроса. */
    private string $rqUid;

    /** Дата/Время формирования запроса. */
    private DateTimeImmutable $rqTm;

    /** Уникальный идентификатор Торговой точки. */
    private string $mid;

    /** Уникальный идентификатор терминала. */
    private string $tid;

    /** IdQR устройства или tid Уникальный идентификатор терминала для СБП, на котором сформирован заказ. */
    private string $idQr;

    /** ID заказа в АС ППРБ.Карты. */
    private string $orderId;

    /** Статус заказа. */
    private OrderState $orderState;

    /** @var ResponseStatusOrderOperationParams[] Блок с перечнем операций, привязанных к данному заказу с детализацией по каждой операции. */
    private array $orderOperationParams;

    /** Блок с перечнем параметров операции СБП. Передается только для операции оплаты через СБП (добавляется в API v3.0.0). */
    private ResponseStatusSbpOperationParams $sbpOperationParams;

    /** Код ошибки. */
    private string $errorCode;

    /** Описание ошибки выполнения запроса. */
    private string $errorDescription;

    public function getRqUid(): string
    {
        return $this->rqUid;
    }

    public function setRqUid(string $rqUid): ResponseStatus
    {
        $this->rqUid = $rqUid;

        return $this;
    }

    public function getRqTm(): DateTimeImmutable
    {
        return $this->rqTm;
    }

    public function setRqTm(DateTimeImmutable $rqTm): ResponseStatus
    {
        $this->rqTm = $rqTm;

        return $this;
    }

    public function getMid(): string
    {
        return $this->mid;
    }

    public function setMid(string $mid): ResponseStatus
    {
        $this->mid = $mid;

        return $this;
    }

    public function getTid(): string
    {
        return $this->tid;
    }

    public function setTid(string $tid): ResponseStatus
    {
        $this->tid = $tid;

        return $this;
    }

    public function getIdQr(): string
    {
        return $this->idQr;
    }

    public function setIdQr(string $idQr): ResponseStatus
    {
        $this->idQr = $idQr;

        return $this;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): ResponseStatus
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getOrderState(): OrderState
    {
        return $this->orderState;
    }

    public function setOrderState(OrderState $orderState): ResponseStatus
    {
        $this->orderState = $orderState;

        return $this;
    }

    public function getOrderOperationParams(): array
    {
        return $this->orderOperationParams;
    }

    public function setOrderOperationParams(array $orderOperationParams): ResponseStatus
    {
        $this->orderOperationParams = $orderOperationParams;

        return $this;
    }

    public function getSbpOperationParams(): ResponseStatusSbpOperationParams
    {
        return $this->sbpOperationParams;
    }

    public function setSbpOperationParams(ResponseStatusSbpOperationParams $sbpOperationParams): ResponseStatus
    {
        $this->sbpOperationParams = $sbpOperationParams;

        return $this;
    }

    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    public function setErrorCode(string $errorCode): ResponseStatus
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    public function getErrorDescription(): string
    {
        return $this->errorDescription;
    }

    public function setErrorDescription(string $errorDescription): ResponseStatus
    {
        $this->errorDescription = $errorDescription;

        return $this;
    }
}
