<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Tests\Feature;

use Symfony\Component\Serializer\Serializer;
use Vlsv\SberPayQrApiClient\Tests\TestCaseBase;

class SerializerFactoryTest extends TestCaseBase
{
    public function test_instance()
    {
        self::assertInstanceOf(Serializer::class, $this->serializer);
    }
}
