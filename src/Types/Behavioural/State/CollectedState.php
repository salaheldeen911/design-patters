<?php

namespace App\Types\Behavioural\State;

class CollectedState extends State
{
    protected string $state = StateEnum::COLLECTED_STATE;

    public function proceed()
    {
        $this->transitionTo(new PaidState());
    }
}
