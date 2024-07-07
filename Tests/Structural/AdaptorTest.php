<?php

namespace Tests\Structural;

use App\Types\Structural\Adaptor\Car;
use App\Types\Structural\Adaptor\EnginesTypes\NormalAdaptor;
use App\Types\Structural\Adaptor\EnginesTypes\TurboAdaptor;
use PHPUnit\Framework\TestCase;

class AdaptorTest extends TestCase
{
    public function testCanStartNormalEngine()
    {
        // $normalEngine = new NormalEngine();
        $adaptor = new NormalAdaptor();
        $car = new Car($adaptor);
        $this->assertEquals('normal start', $car->start());
    }

    public function testCanStartTurboEngine()
    {
        // $turboEngine = new TurboEngine();
        $adaptor = new TurboAdaptor();
        $car = new Car($adaptor);

        $this->assertEquals('turbo start', $car->start());
    }
}
