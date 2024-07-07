<?php

namespace App\Types\Behavioural\State;

class DeliveredState extends State
{
    protected string $state = StateEnum::DELIVERED_STATE;

    public function proceed()
    {
        // Do logic like: Check the address
        $this->transitionTo(new DoneState());
    }
}
