<?php

namespace App\Types\Creational\FactoryMethod;

class BMWBrand implements CarBrandInterface
{
    public function creatBrand()
    {
        return "BMW Brand";
    }
}
