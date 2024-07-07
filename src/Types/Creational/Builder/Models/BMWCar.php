<?php

namespace App\Types\Creational\Builder\Models;

use App\Types\Creational\Builder\CarBuilderInterface;

class BMWCar extends Car
{
    public function sayBye()
    {
        return "bye";
    }
}
