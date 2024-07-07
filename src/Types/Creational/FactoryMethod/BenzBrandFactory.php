<?php

namespace App\Types\Creational\FactoryMethod;

class BenzBrandFactory implements BrandFactoryInterface
{
    public function buildBrand()
    {
        return new BenzBrand();
    }
}
