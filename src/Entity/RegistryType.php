<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

enum RegistryType: string
{
    case QUANTITY = 'QUANTITY';
    case REGISTRY = 'REGISTRY';
}
