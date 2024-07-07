<?php

namespace Tests\Creational;

use App\Types\Creational\SimpleFactory\Car;
use App\Types\Creational\SimpleFactory\CarFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateCar()
    {
        $factory = new CarFactory();
        $BMWCar = $factory->createCar('BMW');

        $this->assertInstanceOf(Car::class, $BMWCar);
    }
}
