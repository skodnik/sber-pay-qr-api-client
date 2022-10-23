<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

class RequestCreationOrderParamsType
{
    /** Наименование товарной позиции. */
    private string $positionName;

    /** Количество штук товарной позиции. */
    private int $positionCount;

    /** Сумма товарной позиции в минимальных единицах валюты. */
    private int $positionSum;

    /** Описание товарной позиции. */
    private string $positionDescription;

    public function getPositionName(): string
    {
        return $this->positionName;
    }

    public function setPositionName(string $positionName): RequestCreationOrderParamsType
    {
        $this->positionName = $positionName;

        return $this;
    }

    public function getPositionCount(): int
    {
        return $this->positionCount;
    }

    public function setPositionCount(int $positionCount): RequestCreationOrderParamsType
    {
        $this->positionCount = $positionCount;

        return $this;
    }

    public function getPositionSum(): int
    {
        return $this->positionSum;
    }

    public function setPositionSum(int $positionSum): RequestCreationOrderParamsType
    {
        $this->positionSum = $positionSum;

        return $this;
    }

    public function getPositionDescription(): string
    {
        return $this->positionDescription;
    }

    public function setPositionDescription(string $positionDescription): RequestCreationOrderParamsType
    {
        $this->positionDescription = $positionDescription;

        return $this;
    }
}
