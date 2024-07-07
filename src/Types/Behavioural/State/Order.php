<?php

namespace App\Types\Behavioural\State;


class Order
{
    private User $client;

    private State $state;

    private array $orderLogs;

    public function __construct(User $client)
    {
        $this->client = $client;
        $this->state = new CreatedState();
    }

    public function getClient(): User
    {
        return $this->client;
    }

    public function proceed()
    {
        $this->state->setOrder($this);
        $this->state->proceed();
    }

    public function getOrderLogs()
    {
        return $this->orderLogs;
    }

    public function addToOrderLogs(string $log)
    {
        $this->orderLogs[] = $log;
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function getState(): State
    {
        return $this->state;
    }
}
