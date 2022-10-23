<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient;

class ClientConfig
{
    public function __construct(
        protected string $certPath = '',
        protected string $certPassword = '',
        protected string $host = 'https://api.sberbank.ru:8443/prod/qr/order/stub/v3',
        protected string $dateTimeFormat = 'Y-m-d\TH:i:s\Z',
    ) {
    }

    public function getCertPath(): string
    {
        return $this->certPath;
    }

    public function getCertPassword(): string
    {
        return $this->certPassword;
    }

    public function getDateTimeFormat(): string
    {
        return $this->dateTimeFormat;
    }

    public function getHost(): string
    {
        return $this->host;
    }
}
