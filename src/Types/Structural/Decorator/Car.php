<?php

namespace App\Types\Structural\Decorator;


class Car
{
    protected $color = "";

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color .= $color;
    }
}
