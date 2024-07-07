<?php

namespace Tests\Behavioural;

use App\Types\Behavioural\Observer2\Casher;
use App\Types\Behavioural\Observer2\Kitchen;
use App\Types\Behavioural\Observer2\Restaurant;
use App\Types\Behavioural\Observer2\Waiter;
use PHPUnit\Framework\TestCase;

class ObserverTest2 extends TestCase
{
    private Restaurant $restaurant;
    private Waiter $waiter;
    private Casher $casher;
    private Kitchen $kitchen;

    public function setUp(): void
    {
        // channel
        $this->restaurant = new Restaurant();

        //subscribers
        $this->waiter = new Waiter();
        $this->casher = new Casher();
        $this->kitchen = new Kitchen();

        // subscribtion
        $this->restaurant->subscribe($this->waiter);
        $this->restaurant->subscribe($this->casher);
        $this->restaurant->subscribe($this->kitchen);
    }

    public function testCanNotifyAllObserversWhenNewOrderIsComing()
    {
        $this->restaurant->addNewOrder();

        $this->assertEquals('Casher is ready for order number 1', $this->casher->getState());
        $this->assertEquals('Kitchen is ready for order number 1', $this->kitchen->getState());
        $this->assertEquals('Waiter is ready for order number 1', $this->waiter->getState());
    }

    public function testCanNotifyAllObserversWhenTowOrdersAreComing()
    {
        $this->restaurant->addNewOrder();
        $this->restaurant->addNewOrder();

        $this->assertEquals('Casher is ready for order number 2', $this->casher->getState());
        $this->assertEquals('Kitchen is ready for order number 2', $this->kitchen->getState());
        $this->assertEquals('Waiter is ready for order number 2', $this->waiter->getState());
    }
}
