<?php

namespace Tests\Structural;

use App\Types\Structural\Decorator\BlackPaintingDecorator;
use App\Types\Structural\Decorator\BluePaintingDecorator;
use App\Types\Structural\Decorator\Car;
use App\Types\Structural\Decorator\Painting;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{

    public function testCanPaintCarWithBlackAndBlueColors()
    {
        // $car = new Car();
        // $painting = new Painting();
        $blackBluePainting = new BluePaintingDecorator(new BlackPaintingDecorator(new Painting()));
        // $BluePainting = new BluePaintingDecorator($blackPainting);

        // die(var_dump($painting->paint($car)));
        // $painting->paint($car);

        $this->assertEquals("-blue--black-", $blackBluePainting->paint(new Car)->getColor());
    }
}
