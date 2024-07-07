<?php

namespace Tests\Creational;

use App\Types\Creational\Builder\BenzCarBuilder;
use App\Types\Creational\Builder\BMWCarBuilder;
use App\Types\Creational\Builder\CarProducer;
use App\Types\Creational\Builder\Models\Car;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testCanPreduceBMWCar()
    {

        $BMWBuilder = new BMWCarBuilder();
        $carProducer = new CarProducer($BMWBuilder);

        $this->assertEmpty($BMWBuilder->getCar()->getPartsData(), "false");
        $myCar = $carProducer->preduce();
        $this->assertNotEmpty($BMWBuilder->getCar()->getPartsData(), "false");

        $this->assertInstanceOf(Car::class, $myCar);

        $this->assertSame($BMWBuilder->getCar(), $myCar);
    }

    public function testCanPreduceBenzCar()
    {
        $BenzBuilder = new BenzCarBuilder();
        $carProducer = new CarProducer($BenzBuilder);

        $this->assertEmpty($BenzBuilder->getCar()->getPartsData(), "false");
        $myCar = $carProducer->preduce();
        $this->assertNotEmpty($BenzBuilder->getCar()->getPartsData(), "false");

        $this->assertInstanceOf(Car::class, $myCar);

        $this->assertSame($BenzBuilder->getCar(), $myCar);
    }
}
