<?php

namespace App\Types\Creational\AbstractFactory;

class CarAbstractFactory
{
    public function CreateBMWCar(): BMWCar
    {
        return new BMWCar();
    }

    public function CreateBenzCar(): BenzCar
    {
        return new BenzCar();
    }
}
