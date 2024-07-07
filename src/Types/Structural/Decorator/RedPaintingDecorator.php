<?php

namespace App\Types\Structural\Decorator;

class RedPaintingDecorator extends PaintingDecorator
{
    const COLOR = "-red-";

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }
}
