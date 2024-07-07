<?php

namespace App\Types\Creational\AbstractFactory;

class BMWCar implements CarInterface
{
    public function calculatePrice()
    {
        return 200000;
    }
}
