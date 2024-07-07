<?php

namespace Tests\Structural;

use App\Types\Structural\Composite\BigBox;
use App\Types\Structural\Composite\GiftBox;
use App\Types\Structural\Composite\Simplebox;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testCanGetTotalPriceOfPackageTree()
    {
        $simpleBox1 = new Simplebox(300);
        $simpleBox2 = new Simplebox(200);
        $package = new BigBox([$simpleBox1, $simpleBox2]);

        $this->assertEquals(500, $package->getPrice());
    }

    public function testCanGetTotalPriceOfPackageTreeWithActions()
    {
        $simpleBox1 = new Simplebox(300);
        $simpleBox2 = new Simplebox(200);
        $package = new BigBox([$simpleBox1, $simpleBox2]);
        $gift1 = new GiftBox(100, 50);

        $package->add($gift1);

        $this->assertEquals(650, $package->getPrice());
    }

    public function testCanGetTotalPriceOfPackageTreeWithRemoveAction()
    {
        $simpleBox1 = new Simplebox(300);
        $simpleBox2 = new Simplebox(200);
        $simpleBox3 = new Simplebox(1000);

        $package = new BigBox([$simpleBox1, $simpleBox2, $simpleBox3]);

        $this->assertEquals(1500, $package->getPrice());

        $package->remove($simpleBox3);

        $this->assertEquals(500, $package->getPrice());
    }
}
