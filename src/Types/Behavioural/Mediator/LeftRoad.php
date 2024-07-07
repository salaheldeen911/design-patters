<?php


namespace App\Types\Behavioural\Mediator;

class LeftRoad extends Road
{
    private const ID = "LEFT";

    public function getId(): string
    {
        return self::ID;
    }
}
