<?php

namespace App\Types\Creational2\Builder;

class CarBuilder
{
    public function BuildCar(BuilderInterface $Builder): Car
    {
        $Builder->createDoors();
        $Builder->createWheels();
        $Builder->createEngien();
        $Builder->createWindows();
        return $Builder->getCar();
    }
}
