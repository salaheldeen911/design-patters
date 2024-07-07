<?php

namespace App\Types\Creational\FactoryMethod;

class BenzBrand implements CarBrandInterface
{
    public function creatBrand()
    {
        return "Benz Brand";
    }
}
