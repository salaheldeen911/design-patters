<?php

namespace Tests\Creational;

use App\Types\Creational\StaticFactory\BMWCar;
use App\Types\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactroyTest extends TestCase
{
    public function testCanCreateBMWCar()
    {
        $this->assertInstanceOf(BMWCar::class, StaticFactory::factory("BMW"));
    }
}
