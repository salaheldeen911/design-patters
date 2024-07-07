<?php

namespace App\Types\Structural\Adaptor\EnginesTypes;

use App\Types\Structural\Adaptor\thirdParty\NormalEngine;

class NormalAdaptor implements EngineInterface
{
    private $engine;

    public function __construct()
    {
        $this->engine = new NormalEngine();
    }

    public function startEngine(): string
    {
        return $this->engine->startNormalEngine();
    }
}
