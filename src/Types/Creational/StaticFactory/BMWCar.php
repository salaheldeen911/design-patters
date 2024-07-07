<?php

namespace App\Types\Creational\StaticFactory;

class BMWCar implements CarInterface
{
    public function model()
    {
        return "BMW";
    }
}
