<?php

namespace App\Types\Behavioural\State;

class CreatedState extends State
{
    protected string $state = StateEnum::CREATED_STATE;

    public function proceed()
    {
        // Do some logic
        $this->transitionTo(new CollectedState());
    }
}
