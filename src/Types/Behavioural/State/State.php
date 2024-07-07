<?php

namespace App\Types\Behavioural\State;

abstract class State
{
    protected string $state;

    private Order $order;

    public function setOrder(Order $order)
    {
        $this->order = $order;
        $this->addStateToLog();
    }

    public function transitionTo(State $state)
    {
        $this->getOrder()->setState($state);
        $this->getOrder()->proceed();
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getOrder(): Order
    {
        return $this->order;
    }

    public function addStateToLog()
    {
        $this->getOrder()->addToOrderLogs($this->state);
    }

    abstract function proceed();
}
