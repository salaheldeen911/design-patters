<?php

namespace App\Types\Structural\Decorator;

class BlackPaintingDecorator extends PaintingDecorator
{
    const COLOR = "-black-";

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);

        return parent::paint($car);
    }
}
