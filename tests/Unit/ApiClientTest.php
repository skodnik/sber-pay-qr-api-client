<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Tests\Unit;

use Vlsv\SberPayQrApiClient\Tests\TestCaseBase;

class ApiClientTest extends TestCaseBase
{
    public function test_getRquid()
    {
        self::assertIsString($this->apiClient->getRqUID());
        self::assertEquals(32, strlen($this->apiClient->getRqUID()));
    }
}
