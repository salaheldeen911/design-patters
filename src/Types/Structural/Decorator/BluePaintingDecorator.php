<?php

namespace App\Types\Structural\Decorator;

class BluePaintingDecorator extends PaintingDecorator
{
    const COLOR = "-blue-";

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }
}
