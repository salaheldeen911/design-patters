<?php

namespace Tests\Creational;

use App\Types\Creational\AbstractFactory\BenzCar;
use App\Types\Creational\AbstractFactory\BMWCar;
use App\Types\Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBMWCar()
    {
        $carFactory = new CarAbstractFactory();
        $myCar = $carFactory->CreateBMWCar();

        $this->assertInstanceOf(BMWCar::class, $myCar);
    }

    public function testCanCreateBenzCar()
    {
        $carFactory = new CarAbstractFactory();
        $myCar = $carFactory->CreateBenzCar();

        $this->assertInstanceOf(BenzCar::class, $myCar);
    }
}
