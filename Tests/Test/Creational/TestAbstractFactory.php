<?php

namespace Tests\Test\Creational;

use App\Types\Creational2\AbstractFactory\BM;
use App\Types\Creational2\AbstractFactory\AbstractFactory;
use App\Types\Creational2\AbstractFactory\Benz;
use PHPUnit\Framework\TestCase;

class TestAbstractFactory extends TestCase
{
    public function testCanCreateBM()
    {
        $this->assertInstanceOf(BM::class, (new AbstractFactory())->createBM());
    }

    public function testCanCreateBenz()
    {
        $this->assertInstanceOf(Benz::class, (new AbstractFactory())->createBenz());
    }
}
