<?php

namespace App\Types\Creational\SimpleFactory;

class CarFactory
{
    public function createCar(string $type)
    {
        return new Car($type);
    }
}
