<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;

class ResponseCancel implements RequestInterface
{
    /** Уникальный идентификатор запроса. */
    private string $rqUid;

    /** Дата/Время формирования запроса. */
    private DateTimeImmutable $rqTm;

    /** $orderId Идентификатор операции (оплаты/возврата) в АС ППРБ.Карты, которую требуется отменить. */
    private string $orderId;

    /** Статус заказа. */
    private string $orderStatus;

    /** Уникальный идентификатор операции в ППРБ.Карты (прямой/возврата), которую необходимо отменить. */
    private string $operationId;

    /** Дата/время операции отмены/возврата */
    private DateTimeImmutable $operationDateTime;

    /** Тип операции. */
    private string $operationType;

    /** Сумма операции в минимальных единицах Валюты. */
    private int $operationSum;

    /** Валюта операции, цифровой код по ISO 4217. */
    private string $operationCurrency;

    /** Код авторизации. */
    private string $authCode;

    /** RRN операции. */
    private string $rrn;

    /** Уникальный идентификатор терминала. */
    private string $tid;

    /** IdQR устройства или tid Уникальный идентификатор терминала для СБП, на котором сформирован заказ. */
    private string $idQr;

    /** Код выполнения запроса. */
    private string $errorCode;

    /** Описание ошибки выполнения запроса. */
    private string $errorDescription;

    /** Блок с перечнем параметров операции СБП. Передается только для операции оплаты через СБП (добавляется в API v3.0.0). */
    private ResponseCancelSbpOperationParams $sbpOperationParams;

    public function getRqUid(): string
    {
        return $this->rqUid;
    }

    public function setRqUid(string $rqUid): ResponseCancel
    {
        $this->rqUid = $rqUid;

        return $this;
    }

    public function getRqTm(): DateTimeImmutable
    {
        return $this->rqTm;
    }

    public function setRqTm(DateTimeImmutable $rqTm): ResponseCancel
    {
        $this->rqTm = $rqTm;

        return $this;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): ResponseCancel
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getOrderStatus(): string
    {
        return $this->orderStatus;
    }

    public function setOrderStatus(string $orderStatus): ResponseCancel
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    public function getOperationId(): string
    {
        return $this->operationId;
    }

    public function setOperationId(string $operationId): ResponseCancel
    {
        $this->operationId = $operationId;

        return $this;
    }

    public function getOperationDateTime(): DateTimeImmutable
    {
        return $this->operationDateTime;
    }

    public function setOperationDateTime(DateTimeImmutable $operationDateTime): ResponseCancel
    {
        $this->operationDateTime = $operationDateTime;

        return $this;
    }

    public function getOperationType(): string
    {
        return $this->operationType;
    }

    public function setOperationType(string $operationType): ResponseCancel
    {
        $this->operationType = $operationType;

        return $this;
    }

    public function getOperationSum(): int
    {
        return $this->operationSum;
    }

    public function setOperationSum(int $operationSum): ResponseCancel
    {
        $this->operationSum = $operationSum;

        return $this;
    }

    public function getOperationCurrency(): string
    {
        return $this->operationCurrency;
    }

    public function setOperationCurrency(string $operationCurrency): ResponseCancel
    {
        $this->operationCurrency = $operationCurrency;

        return $this;
    }

    public function getAuthCode(): string
    {
        return $this->authCode;
    }

    public function setAuthCode(string $authCode): ResponseCancel
    {
        $this->authCode = $authCode;

        return $this;
    }

    public function getRrn(): string
    {
        return $this->rrn;
    }

    public function setRrn(string $rrn): ResponseCancel
    {
        $this->rrn = $rrn;

        return $this;
    }

    public function getTid(): string
    {
        return $this->tid;
    }

    public function setTid(string $tid): ResponseCancel
    {
        $this->tid = $tid;

        return $this;
    }

    public function getIdQr(): string
    {
        return $this->idQr;
    }

    public function setIdQr(string $idQr): ResponseCancel
    {
        $this->idQr = $idQr;

        return $this;
    }

    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    public function setErrorCode(string $errorCode): ResponseCancel
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    public function getErrorDescription(): string
    {
        return $this->errorDescription;
    }

    public function setErrorDescription(string $errorDescription): ResponseCancel
    {
        $this->errorDescription = $errorDescription;

        return $this;
    }

    public function getSbpOperationParams(): ResponseCancelSbpOperationParams
    {
        return $this->sbpOperationParams;
    }

    public function setSbpOperationParams(ResponseCancelSbpOperationParams $sbpOperationParams): ResponseCancel
    {
        $this->sbpOperationParams = $sbpOperationParams;

        return $this;
    }

}
