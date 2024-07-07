<?php

namespace App\Types\Structural\Proxy;

class BankAccount implements BankAccountInterface
{
    private array $tansactions = [];

    public function deposit(int $amount)
    {
        $this->tansactions[] = +$amount;

        return $this->getBalance();
    }

    public function withdraw(int $amount)
    {
        if ($this->getBalance() > $amount) {
            $this->tansactions[] = -$amount;
        }
        return $this->getBalance();
    }

    public function getBalance()
    {
        return array_sum($this->tansactions);
    }
}
