<?php

namespace App\Types\Structural\Proxy;

class ATMProxy extends BankAccount implements BankAccountInterface // why to implements
{
    private  $balance = null;

    public function getBalance()
    {
        return $this->balance === null ? parent::getBalance() : $this->balance;
    }
}
