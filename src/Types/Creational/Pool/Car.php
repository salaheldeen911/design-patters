<?php

namespace App\Types\Creational\Pool;

class Car
{
    private $rentAt;
    public function __construct()
    {
        $this->rentAt = new \DateTime();
    }

    public function moveCar()
    {
        return "CarMoved";
    }
}
