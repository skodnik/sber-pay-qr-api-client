<?php

namespace Vlsv\SberPayQrApiClient\Entity;

use DateTimeImmutable;

interface ResponseInterface
{
    public function getRqUid(): string;

    public function setRqUid(string $rqUid): ResponseInterface;

    public function getRqTm(): DateTimeImmutable;

    public function setRqTm(DateTimeImmutable $rqTm): ResponseInterface;
}
