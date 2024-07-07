<?php

namespace App\Types\Creational2\Builder;

use App\Types\Creational2\Builder\Car;

interface BuilderInterface
{
    public function createDoors(): void;
    public function createWheels(): void;
    public function createEngien(): void;
    public function createWindows(): void;
    public function getCar(): Car;
}
