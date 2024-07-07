<?php

namespace Tests\Test\Creational;

use App\Types\Creational2\Builder\Benz;
use App\Types\Creational2\Builder\BenzBuilder;
use App\Types\Creational2\Builder\BM;
use App\Types\Creational2\Builder\BMBuilder;
use App\Types\Creational2\Builder\CarBuilder;
use PHPUnit\Framework\TestCase;

class TestBuilder extends TestCase
{
    public function testCanBuildBM()
    {
        $builder = new BMBuilder();
        $carBuilder = new CarBuilder();
        $this->assertInstanceOf(BM::class, $carBuilder->BuildCar($builder));
    }

    public function testCanBuildBenz()
    {
        $builder = new BenzBuilder();
        $carBuilder = new CarBuilder();
        $this->assertInstanceOf(Benz::class, $carBuilder->BuildCar($builder));
    }
}
