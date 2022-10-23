<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;
use Symfony\Component\Serializer\Annotation\SerializedName;

class ResponseRegistryRegistryDataOrderParamsOrderParam
{
    /**
     * ID заказа в АС ППРБ.Карты.
     *
     * @SerializedName("orderId")
     */
    private string $orderId;

    /**
     * Номер заказа в АС Партнера.
     *
     * @SerializedName("partnerOrderNumber")
     */
    private string $partnerOrderNumber;

    /**
     * Сумма заказа в минимальных единицах Валюты.
     *
     * @SerializedName("amount")
     */
    private int $amount;

    /**
     * Валюта заказа, цифровой код по ISO 4217.
     *
     * @SerializedName("currency")
     */
    private string $currency;

    /**
     * ДатаВремя формирования заказа.
     *
     * @SerializedName("orderCreateDate")
     */
    private DateTimeImmutable $orderCreateDate;

    /**
     * Статус заказа.
     *
     * @SerializedName("orderState")
     */
    private string $orderState;

    /**
     * @SerializedName("orderOperationParams")
     */
    private ResponseRegistryRegistryDataOrderParamsOrderOperationParams $orderOperationParams;

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): ResponseRegistryRegistryDataOrderParamsOrderParam
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getPartnerOrderNumber(): string
    {
        return $this->partnerOrderNumber;
    }

    public function setPartnerOrderNumber(string $partnerOrderNumber): ResponseRegistryRegistryDataOrderParamsOrderParam
    {
        $this->partnerOrderNumber = $partnerOrderNumber;

        return $this;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): ResponseRegistryRegistryDataOrderParamsOrderParam
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): ResponseRegistryRegistryDataOrderParamsOrderParam
    {
        $this->currency = $currency;

        return $this;
    }

    public function getOrderCreateDate(): DateTimeImmutable
    {
        return $this->orderCreateDate;
    }

    public function setOrderCreateDate(DateTimeImmutable $orderCreateDate): ResponseRegistryRegistryDataOrderParamsOrderParam
    {
        $this->orderCreateDate = $orderCreateDate;

        return $this;
    }

    public function getOrderState(): string
    {
        return $this->orderState;
    }

    public function setOrderState(string $orderState): ResponseRegistryRegistryDataOrderParamsOrderParam
    {
        $this->orderState = $orderState;

        return $this;
    }

    public function getOrderOperationParams(): ResponseRegistryRegistryDataOrderParamsOrderOperationParams
    {
        return $this->orderOperationParams;
    }

    public function setOrderOperationParams(ResponseRegistryRegistryDataOrderParamsOrderOperationParams $orderOperationParams): ResponseRegistryRegistryDataOrderParamsOrderParam
    {
        $this->orderOperationParams = $orderOperationParams;

        return $this;
    }
}
