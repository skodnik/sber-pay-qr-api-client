<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

enum OrderState: string
{
    case PAID = 'PAID';
    case CREATED = 'CREATED';
    case REVERSED = 'REVERSED';
    case REFUNDED = 'REFUNDED';
    case REVOKED = 'REVOKED';
    case DECLINED = 'DECLINED';
    case EXPIRED = 'EXPIRED';
    case AUTHORIZED = 'AUTHORIZED';
    case CONFIRMED = 'CONFIRMED';
    case ON_PAYMENT = 'ON_PAYMENT';
}
