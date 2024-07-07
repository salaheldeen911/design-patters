<?php

namespace App\Types\Behavioural\State;

class PaidState extends State
{
    protected string $state = StateEnum::PAID_STATE;

    private bool $paymentStatus;

    public function proceed()
    {
        // Do Logic like: create the payment from user account
        $this->paymentStatus = $this->getOrder()->getClient()->isPaymentExist();

        if ($this->paymentStatus) {
            $this->transitionTo(new DeliveredState());
        } else {
            $this->transitionTo(new CancelledState());
        }
    }
}
