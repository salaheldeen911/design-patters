<?php

namespace App\Types\Creational\StaticFactory;

class StaticFactory
{
    public static function factory(string $type): CarInterFace
    {
        if ($type == "BMW") {
            return new BMWCar();
        }
        if ($type == "Benz") {
            return (new BenzCar());
        }

        return null;
    }
}
