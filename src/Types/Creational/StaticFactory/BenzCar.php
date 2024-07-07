<?php

namespace App\Types\Creational\StaticFactory;

class BenzCar implements CarInterface
{
    public function model()
    {
        return "Benz";
    }
}
