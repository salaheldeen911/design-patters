<?php

namespace App\Types\Behavioural\State;

class CancelledState extends State
{
    protected string $state = StateEnum::CANCELLED_STATE;

    public function proceed()
    {
        $this->transitionTo(new ArchivedState());
    }
}
