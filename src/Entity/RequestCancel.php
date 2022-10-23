<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;

class RequestCancel implements RequestInterface
{
    /** Уникальный идентификатор запроса. */
    private string $rqUid;

    /** Дата/Время формирования запроса. */
    private DateTimeImmutable $rqTm;

    /** ID заказа в АС ППРБ.Карты. */
    private string $orderId;

    /** Тип операции (добавляется в API v2.0.0). */
    private string $operationType;

    /** Идентификатор операции (оплаты/возврата) в АС ППРБ.Карты, которую требуется отменить. */
    private string $operationId;

    /** Код авторизации. */
    private string $authCode;

    /** IdQR устройства или tid Уникальный идентификатор терминала для СБП, на котором сформирован заказ. */
    private string $idQr;

    /** Уникальный идентификатор терминала (добавляется в API v2.0.0). */
    private string $tid;

    /** Сумма отмены/возврата в минимальных единицах Валюты. */
    private int $cancelOperationSum;

    /** Валюта операции, цифровой код по ISO 4217. */
    private string $operationCurrency;

    /** Идентификатор Получателя. Возможные значения: Номер мобильного телефона клиента физ. лица в формате +79001234567& (добавляется в API v3.0.0). */
    private string $sbpPayerId;

    /** Описание назначения платежа (добавляется в API v3.0.0). */
    private string $operationDescription;

    public function getRqUid(): string
    {
        return $this->rqUid;
    }

    public function setRqUid(string $rqUid): RequestCancel
    {
        $this->rqUid = $rqUid;

        return $this;
    }

    public function getRqTm(): DateTimeImmutable
    {
        return $this->rqTm;
    }

    public function setRqTm(DateTimeImmutable $rqTm): RequestCancel
    {
        $this->rqTm = $rqTm;

        return $this;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): RequestCancel
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getOperationType(): string
    {
        return $this->operationType;
    }

    public function setOperationType(string $operationType): RequestCancel
    {
        $this->operationType = $operationType;

        return $this;
    }

    public function getOperationId(): string
    {
        return $this->operationId;
    }

    public function setOperationId(string $operationId): RequestCancel
    {
        $this->operationId = $operationId;

        return $this;
    }

    public function getAuthCode(): string
    {
        return $this->authCode;
    }

    public function setAuthCode(string $authCode): RequestCancel
    {
        $this->authCode = $authCode;

        return $this;
    }

    public function getIdQr(): string
    {
        return $this->idQr;
    }

    public function setIdQr(string $idQr): RequestCancel
    {
        $this->idQr = $idQr;

        return $this;
    }

    public function getTid(): string
    {
        return $this->tid;
    }

    public function setTid(string $tid): RequestCancel
    {
        $this->tid = $tid;

        return $this;
    }

    public function getCancelOperationSum(): int
    {
        return $this->cancelOperationSum;
    }

    public function setCancelOperationSum(int $cancelOperationSum): RequestCancel
    {
        $this->cancelOperationSum = $cancelOperationSum;

        return $this;
    }

    public function getOperationCurrency(): string
    {
        return $this->operationCurrency;
    }

    public function setOperationCurrency(string $operationCurrency): RequestCancel
    {
        $this->operationCurrency = $operationCurrency;

        return $this;
    }

    public function getSbpPayerId(): string
    {
        return $this->sbpPayerId;
    }

    public function setSbpPayerId(string $sbpPayerId): RequestCancel
    {
        $this->sbpPayerId = $sbpPayerId;

        return $this;
    }

    public function getOperationDescription(): string
    {
        return $this->operationDescription;
    }

    public function setOperationDescription(string $operationDescription): RequestCancel
    {
        $this->operationDescription = $operationDescription;

        return $this;
    }
}
