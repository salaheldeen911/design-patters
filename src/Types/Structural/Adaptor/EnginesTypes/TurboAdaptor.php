<?php

namespace App\Types\Structural\Adaptor\EnginesTypes;

use App\Types\Structural\Adaptor\thirdParty\TurboEngine;

class TurboAdaptor implements EngineInterface
{
    private $engine;

    public function __construct()
    {
        $this->engine = new TurboEngine();
    }
    public function startEngine(): string
    {
        return $this->engine->startTurboEngine();
    }
}
