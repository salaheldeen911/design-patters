<?php

namespace App\Types\Behavioural\State;

class DoneState extends State
{
    protected string $state = StateEnum::DONE_STATE;

    public function proceed()
    {
        // Do stuff here
        $this->transitionTo(new ArchivedState());
    }
}
