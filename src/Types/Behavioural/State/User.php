<?php

namespace App\Types\Behavioural\State;

class User
{
    private string $name;
    private string $address;
    private bool $paymentExist;


    public function __construct(string $name, string $address, bool $paymentExist)
    {
        $this->name = $name;
        $this->address = $address;
        $this->paymentExist = $paymentExist;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function isPaymentExist()
    {
        return $this->paymentExist;
    }
}
