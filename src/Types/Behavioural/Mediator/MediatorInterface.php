<?php


namespace App\Types\Behavioural\Mediator;

interface MediatorInterface
{
    public function action(Road $road, string $event);
}
