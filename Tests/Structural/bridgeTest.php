<?php

namespace Tests\Structural;

use App\Types\Structural\Bridge\CarModels\BenzCar;
use App\Types\Structural\Bridge\CarColors\BlueCar;
use App\Types\Structural\Bridge\CarModels\BMWCar;
use App\Types\Structural\Bridge\CarColors\RedCar;
use PHPUnit\Framework\TestCase;

class bridgeTest extends TestCase
{
    public function testCanCreateBenzBlueCar()
    {
        $blueColor = new BlueCar();
        $benzCar = new BenzCar($blueColor);
        $this->assertEquals('the car type is Benz and the car color is blue', $benzCar->getProduct());
    }

    public function testCanCreateBenzRedCar()
    {
        $redColor = new RedCar();
        $benzCar = new BenzCar($redColor);
        $this->assertEquals('the car type is Benz and the car color is red', $benzCar->getProduct());
    }

    public function testCanCreateBMWBlueCar()
    {
        $blueColor = new BlueCar();
        $benzCar = new BMWCar($blueColor);
        $this->assertEquals('the car type is BMW and the car color is blue', $benzCar->getProduct());
    }

    public function testCanCreateBMWRedCar()
    {
        $redColor = new RedCar();
        $benzCar = new BMWCar($redColor);
        $this->assertEquals('the car type is BMW and the car color is red', $benzCar->getProduct());
    }
}
