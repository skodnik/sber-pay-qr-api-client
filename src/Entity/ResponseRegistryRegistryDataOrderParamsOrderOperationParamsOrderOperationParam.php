<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;
use Symfony\Component\Serializer\Annotation\SerializedName;

class ResponseRegistryRegistryDataOrderParamsOrderOperationParamsOrderOperationParam
{
    /**
     * Идентификатор операции в АС Банка(ППРБ Ecom).
     *
     * @SerializedName("operationId")
     */
    private string $operationId;

    /**
     * ДатаВремя совершения операции.
     *
     * @SerializedName("operationDateTime")
     */
    private DateTimeImmutable $operationDateTime;

    /**
     * RRN операции.
     *
     * @SerializedName("rrn")
     */
    private string $rrn;

    /**
     * Тип операции.
     * enum: ["PAY", "REVERSE", "REFUND", "SBP_PAY_ACKNOWL", "SBP_ACK_ONUS", "SBP_STATUS_OUT", "SBP_CREDIT_IN_RQ", "SBP_REFUND_IN_RQ"]
     *
     * @SerializedName("operationType")
     */
    private OperationType $operationType;

    /**
     * Сумма операции в минимальных единицах Валюты.
     *
     * @SerializedName("operationSum")
     */
    private int $operationSum;

    /**
     * Валюта операции, цифровой код по ISO 4217.
     *
     * @SerializedName("operationCurrency")
     */
    private string $operationCurrency;

    /**
     * Код авторизации.
     *
     * @SerializedName("authCode")
     */
    private string $authCode;

    /**
     * Код успешности авторизации.
     *
     * @SerializedName("responseCode")
     */
    private string $responseCode;

    /**
     * Описание кода ответа.
     *
     * @SerializedName("responseDesc")
     */
    private string $responseDesc;

    /**
     * @SerializedName("sbpOperationParams")
     */
    private ResponseRegistryRegistryDataOrderParamsOrderOperationParamsSbpOperationParams $sbpOperationParams;

    public function getOperationId(): string
    {
        return $this->operationId;
    }

    public function setOperationId(string $operationId): ResponseRegistryRegistryDataOrderParamsOrderOperationParamsOrderOperationParam
    {
        $this->operationId = $operationId;

        return $this;
    }

    public function getOperationDateTime(): DateTimeImmutable
    {
        return $this->operationDateTime;
    }

    public function setOperationDateTime(DateTimeImmutable $operationDateTime): ResponseRegistryRegistryDataOrderParamsOrderOperationParamsOrderOperationParam
    {
        $this->operationDateTime = $operationDateTime;

        return $this;
    }

    public function getRrn(): string
    {
        return $this->rrn;
    }

    public function setRrn(string $rrn): ResponseRegistryRegistryDataOrderParamsOrderOperationParamsOrderOperationParam
    {
        $this->rrn = $rrn;

        return $this;
    }

    public function getOperationType(): OperationType
    {
        return $this->operationType;
    }

    public function setOperationType(OperationType $operationType): ResponseRegistryRegistryDataOrderParamsOrderOperationParamsOrderOperationParam
    {
        $this->operationType = $operationType;

        return $this;
    }

    public function getOperationSum(): int
    {
        return $this->operationSum;
    }

    public function setOperationSum(int $operationSum): ResponseRegistryRegistryDataOrderParamsOrderOperationParamsOrderOperationParam
    {
        $this->operationSum = $operationSum;

        return $this;
    }

    public function getOperationCurrency(): string
    {
        return $this->operationCurrency;
    }

    public function setOperationCurrency(string $operationCurrency): ResponseRegistryRegistryDataOrderParamsOrderOperationParamsOrderOperationParam
    {
        $this->operationCurrency = $operationCurrency;

        return $this;
    }

    public function getAuthCode(): string
    {
        return $this->authCode;
    }

    public function setAuthCode(string $authCode): ResponseRegistryRegistryDataOrderParamsOrderOperationParamsOrderOperationParam
    {
        $this->authCode = $authCode;

        return $this;
    }

    public function getResponseCode(): string
    {
        return $this->responseCode;
    }

    public function setResponseCode(string $responseCode): ResponseRegistryRegistryDataOrderParamsOrderOperationParamsOrderOperationParam
    {
        $this->responseCode = $responseCode;

        return $this;
    }

    public function getResponseDesc(): string
    {
        return $this->responseDesc;
    }

    public function setResponseDesc(string $responseDesc): ResponseRegistryRegistryDataOrderParamsOrderOperationParamsOrderOperationParam
    {
        $this->responseDesc = $responseDesc;

        return $this;
    }

    public function getSbpOperationParams(): ResponseRegistryRegistryDataOrderParamsOrderOperationParamsSbpOperationParams
    {
        return $this->sbpOperationParams;
    }

    public function setSbpOperationParams(ResponseRegistryRegistryDataOrderParamsOrderOperationParamsSbpOperationParams $sbpOperationParams): ResponseRegistryRegistryDataOrderParamsOrderOperationParamsOrderOperationParam
    {
        $this->sbpOperationParams = $sbpOperationParams;

        return $this;
    }
}
