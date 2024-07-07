<?php


namespace App\Types\Behavioural\Mediator;

class RightRoad extends Road
{
    private const ID = "RIGHT";

    public function getId(): string
    {
        return self::ID;
    }
}
