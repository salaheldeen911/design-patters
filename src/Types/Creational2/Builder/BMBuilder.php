<?php

namespace App\Types\Creational2\Builder;

class BMBuilder implements BuilderInterface
{
    private $type;
    public function __construct()
    {
        $this->type = new BM();
    }
    public function createDoors(): void
    {
        $this->type->setData("Create", "Doors");
    }
    public function createWheels(): void
    {
        $this->type->setData("Create", "Wheels");
    }
    public function createEngien(): void
    {
        $this->type->setData("Create", "Engien");
    }
    public function createWindows(): void
    {
        $this->type->setData("Create", "Windows");
    }
    public function getCar(): Car
    {
        return $this->type;
    }
}
