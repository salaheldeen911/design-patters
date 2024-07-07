<?php

namespace App\Types\Creational2\Builder;

class BenzBuilder implements BuilderInterface
{
    private $type;
    public function __construct()
    {
        $this->type = new Benz();
    }
    public function createDoors(): void
    {
        $this->type->setData("Create", "Benz_Doors");
    }
    public function createWheels(): void
    {
        $this->type->setData("Create", "Benz_Wheels");
    }
    public function createEngien(): void
    {
        $this->type->setData("Create", "Benz_Engien");
    }
    public function createWindows(): void
    {
        $this->type->setData("Create", "Benz_Windows");
    }
    public function getCar(): Car
    {
        return $this->type;
    }
}
