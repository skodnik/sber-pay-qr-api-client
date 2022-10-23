<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

class ResponseCancelSbpOperationParams
{
    /** Идентификатор операции в СБП. */
    private string $sbpCancelOperationId;

    /** Наименование юр. лица торгово-сервисного предприятия. */
    private string $sbpMerchantName;
}
