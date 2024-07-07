<?php

namespace App\Types\Structural\Adaptor;

use App\Types\Structural\Adaptor\EnginesTypes\EngineInterface;

class Car
{
    private $engine;

    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    public function start()
    {
        return $this->engine->startEngine();
    }
}
