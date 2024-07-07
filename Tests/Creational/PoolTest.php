<?php

namespace Tests\Creational;

use App\Types\Creational\Pool\Car;
use App\Types\Creational\Pool\CarPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    private $carPool;

    protected function setUp(): void
    {
        parent::setUp();
        $this->carPool = new CarPool();
    }
    public function testCanRentCar()
    {
        $myCar = $this->carPool->rentCar();

        $this->assertInstanceOf(Car::class, $myCar);
        $this->assertEquals(1, $this->carPool->getReport());
    }

    public function testCanFreeCar()
    {
        $myCar = $this->carPool->rentCar();
        $myCar2 = $this->carPool->rentCar();
        $this->carPool->freeCar($myCar);

        $this->assertEquals(2, $this->carPool->getReport());
        $this->assertEquals(1, $this->carPool->getFreeCount());
    }
}
