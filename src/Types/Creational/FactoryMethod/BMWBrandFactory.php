<?php

namespace App\Types\Creational\FactoryMethod;

class BMWBrandFactory implements BrandFactoryInterface
{
    public function buildBrand()
    {
        return new BMWBrand();
    }
}
