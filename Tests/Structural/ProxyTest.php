<?php

namespace Tests\Structural;

use App\Types\Structural\Proxy\ATMProxy;
use App\Types\Structural\Proxy\BankAccountInterface;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testCanDepositFromATM()
    {
        $proxy = new ATMProxy();
        $proxy->deposit(1000);
        $proxy->deposit(5000);
        $proxy->withdraw(2000);
        $this->assertInstanceOf(BankAccountInterface::class, $proxy);
        $this->assertEquals(4000, $proxy->getBalance());
    }
}
