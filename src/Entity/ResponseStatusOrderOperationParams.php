<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;

class ResponseStatusOrderOperationParams
{
    /** Идентификатор операции в АС ППРБ.Карты. */
    private string $operationId;

    /** Дата/Время регистрации заказа. */
    private DateTimeImmutable $operationDateTime;

    /** RRN операции. */
    private string $rrn;

    /** Тип операции. */
    private OperationType $operationType;

    /** Сумма операции в минимальных единицах Валюты. */
    private int $operationSum;

    /** Валюта операции, цифровой код по ISO 4217. */
    private string $operationCurrency;

    /** Код авторизации. */
    private string $authCode;

    /** Код выполнения запроса. */
    private string $responseCode;

    /** Описание кода выполнения запроса. */
    private string $responseDesc;

    /** Маскированное Имя Отчество Ф. плательщика (добавляется в API v3.0.0). */
    private string $clientName;

    public function getOperationId(): string
    {
        return $this->operationId;
    }

    public function setOperationId(string $operationId): ResponseStatusOrderOperationParams
    {
        $this->operationId = $operationId;

        return $this;
    }

    public function getOperationDateTime(): DateTimeImmutable
    {
        return $this->operationDateTime;
    }

    public function setOperationDateTime(DateTimeImmutable $operationDateTime): ResponseStatusOrderOperationParams
    {
        $this->operationDateTime = $operationDateTime;

        return $this;
    }

    public function getRrn(): string
    {
        return $this->rrn;
    }

    public function setRrn(string $rrn): ResponseStatusOrderOperationParams
    {
        $this->rrn = $rrn;

        return $this;
    }

    public function getOperationType(): OperationType
    {
        return $this->operationType;
    }

    public function setOperationType(OperationType $operationType): ResponseStatusOrderOperationParams
    {
        $this->operationType = $operationType;

        return $this;
    }

    public function getOperationSum(): int
    {
        return $this->operationSum;
    }

    public function setOperationSum(int $operationSum): ResponseStatusOrderOperationParams
    {
        $this->operationSum = $operationSum;

        return $this;
    }

    public function getOperationCurrency(): string
    {
        return $this->operationCurrency;
    }

    public function setOperationCurrency(string $operationCurrency): ResponseStatusOrderOperationParams
    {
        $this->operationCurrency = $operationCurrency;

        return $this;
    }

    public function getAuthCode(): string
    {
        return $this->authCode;
    }

    public function setAuthCode(string $authCode): ResponseStatusOrderOperationParams
    {
        $this->authCode = $authCode;

        return $this;
    }

    public function getResponseCode(): string
    {
        return $this->responseCode;
    }

    public function setResponseCode(string $responseCode): ResponseStatusOrderOperationParams
    {
        $this->responseCode = $responseCode;

        return $this;
    }

    public function getResponseDesc(): string
    {
        return $this->responseDesc;
    }

    public function setResponseDesc(string $responseDesc): ResponseStatusOrderOperationParams
    {
        $this->responseDesc = $responseDesc;

        return $this;
    }

    public function getClientName(): string
    {
        return $this->clientName;
    }

    public function setClientName(string $clientName): ResponseStatusOrderOperationParams
    {
        $this->clientName = $clientName;

        return $this;
    }
}
