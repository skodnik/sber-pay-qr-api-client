<?php

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;

interface RequestInterface
{
    public function getRqUid(): string;

    public function setRqUid(string $rqUid): RequestInterface;

    public function getRqTm(): DateTimeImmutable;

    public function setRqTm(DateTimeImmutable $rqTm): RequestInterface;
}
