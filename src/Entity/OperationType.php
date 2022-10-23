<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

enum OperationType: string
{
    case PAY = 'PAY';
    case REVERSE = 'REVERSE';
    case REFUND = 'REFUND';
    case SBP_PAY_ACKNOWL = 'SBP_PAY_ACKNOWL';
    case SBP_ACK_ONUS = 'SBP_ACK_ONUS';
    case SBP_STATUS_OUT = 'SBP_STATUS_OUT';
    case SBP_CREDIT_IN_RQ = 'SBP_CREDIT_IN_RQ';
    case SBP_REFUND_IN_RQ = 'SBP_REFUND_IN_RQ';
}
