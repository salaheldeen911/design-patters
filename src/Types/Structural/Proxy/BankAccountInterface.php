<?php

namespace App\Types\Structural\Proxy;


interface BankAccountInterface
{

    public function deposit(int $amount);
    public function withDraw(int $amount);
    public function getBalance();
}
