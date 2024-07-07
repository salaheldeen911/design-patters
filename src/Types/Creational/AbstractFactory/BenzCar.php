<?php

namespace App\Types\Creational\AbstractFactory;

class BenzCar implements CarInterface
{
    public function calculatePrice()
    {
        return 100000;
    }
}
