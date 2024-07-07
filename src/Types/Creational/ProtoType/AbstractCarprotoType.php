<?php

namespace App\Types\Creational\protoType;

abstract class AbstractCarprotoType
{
    private $flag;

    abstract function __clone();

    public function getFlag()
    {
        return $this->flag;
    }

    public function setFlag($flag)
    {
        return $this->flag = $flag;
    }
}
