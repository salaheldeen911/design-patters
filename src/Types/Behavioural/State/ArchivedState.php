<?php

namespace App\Types\Behavioural\State;

class ArchivedState extends State
{
    protected string $state = StateEnum::ARCHIVED_STATE;

    public function proceed()
    {
        // Do nothing
    }

    public function transitionTo(State $state)
    {
        // Do nothing
    }
}
