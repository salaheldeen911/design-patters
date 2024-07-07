<?php

namespace Tests\Creational;

use App\Types\Creational\protoType\AutoCarProtoType;
use App\Types\Creational\protoType\ManualCarProtoType;
use PHPUnit\Framework\TestCase;

class ProtoTypeTest extends TestCase
{
    public function testCanCreateAutoCarsWithClone()
    {
        $autoPrototypeCar = new AutoCarProtoType();

        for ($index = 1; $index <= 10; $index++) {
            $newcar = clone $autoPrototypeCar;
            $this->assertInstanceOf(AutoCarProtoType::class, $newcar);
        }
    }

    public function testCanCreateManualCarsWithClone()
    {
        $ManualCarProtoTypeCar = new ManualCarProtoType();
        $old = null;
        for ($index = 1; $index <= 10; $index++) {
            $newcar = clone $ManualCarProtoTypeCar;
            $this->assertInstanceOf(ManualCarProtoType::class, $newcar);
            if ($index == 1) {
                $old = $newcar;
                continue;
            }

            $this->assertEquals($old, $newcar);
        }
    }
}
