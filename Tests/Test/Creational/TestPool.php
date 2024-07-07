<?php

namespace Tests\Test\Creational;

use App\Types\Creational2\Pool\Car;
use App\Types\Creational2\Pool\Pooler;
use PHPUnit\Framework\TestCase;

class TestPool extends TestCase
{
    private $carPool;

    public function testCanRentCar()
    {
        $carPool = new Pooler();
        $myCar = $carPool->carRent();
        $this->assertInstanceOf(Car::class, $myCar);
        $this->assertEquals(1, $carPool->getReport());
    }

    public function testCanFreeCar()
    {
        $carPool = new Pooler();
        $myCar = $carPool->carRent();
        $myCar2 = $carPool->carRent();
        $carPool->carFree($myCar);

        $this->assertEquals(2, $carPool->getReport());
        $this->assertEquals(1, $carPool->getFreeCount());
    }
}
