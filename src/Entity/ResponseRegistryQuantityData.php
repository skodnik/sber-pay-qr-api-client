<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

use Symfony\Component\Serializer\Annotation\SerializedName;

class ResponseRegistryQuantityData
{
    /** Общее кол-во успешных операций.
     *
     * @SerializedName("totalCount")
     */
    private int $totalCount;

    /**
     * Общая сумма покупок: сумма покупок (только успешные).
     *
     * @SerializedName("totalPaymentAmount")
     */
    private int $totalPaymentAmount;

    /**
     * ID заказа в АС ППРБ.Карты (Сбербанк).
     *
     * @SerializedName("totalRefundAmount")
     */
    private int $totalRefundAmount;

    /**
     * Общая сумма покупок: сумма покупок за вычетом суммы возвратов и отмен (только успешные).
     *
     * @SerializedName("totalAmount")
     */
    private int $totalAmount;

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): ResponseRegistryQuantityData
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    public function getTotalPaymentAmount(): int
    {
        return $this->totalPaymentAmount;
    }

    public function setTotalPaymentAmount(int $totalPaymentAmount): ResponseRegistryQuantityData
    {
        $this->totalPaymentAmount = $totalPaymentAmount;

        return $this;
    }

    public function getTotalRefundAmount(): int
    {
        return $this->totalRefundAmount;
    }

    public function setTotalRefundAmount(int $totalRefundAmount): ResponseRegistryQuantityData
    {
        $this->totalRefundAmount = $totalRefundAmount;

        return $this;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(int $totalAmount): ResponseRegistryQuantityData
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }
}
