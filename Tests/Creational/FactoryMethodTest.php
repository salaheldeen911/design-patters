<?php

namespace Tests\Creational;

use App\Types\Creational\FactoryMethod\BenzBrand;
use App\Types\Creational\FactoryMethod\BenzBrandFactory;
use App\Types\Creational\FactoryMethod\BMWBrand;
use App\Types\Creational\FactoryMethod\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateBMWBrand()
    {
        $BrandFactory = new BMWBrandFactory(200000);
        $myBrand = $BrandFactory->BuildBrand();

        $this->assertInstanceOf(BMWBrand::class, $myBrand);
    }

    public function testCanCreateBenzBrand()
    {
        $BrandFactory = new BenzBrandFactory(200000);
        $myBrand = $BrandFactory->BuildBrand();

        $this->assertInstanceOf(BenzBrand::class, $myBrand);
    }
}
