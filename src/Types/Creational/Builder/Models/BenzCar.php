<?php

namespace App\Types\Creational\Builder\Models;

use App\Types\Creational\Builder\CarBuilderInterface;

class BenzCar extends Car
{
    public function sayHi()
    {
        return "hi";
    }
}
