<?php

namespace Tests\Behavioural;

use App\Types\Behavioural\State\Order;
use App\Types\Behavioural\State\StateEnum;
use App\Types\Behavioural\State\User;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testCanCreateOrder()
    {
        $user = new User('salah', '4040', true);
        $order = new Order($user);
        self::assertEquals(StateEnum::CREATED_STATE, $order->getState()->getState());
    }

    public function testCanMoveOrderFromCreatedToArchived()
    {
        $user = new User('salah', '4040', true);
        $order = new Order($user);
        $order->proceed();
        // die(var_dump($order->getOrderLogs()));

        self::assertEquals(StateEnum::ARCHIVED_STATE, $order->getState()->getState());
    }

    public function testCanMoveOrderFromCreatedToCancelledToArchived()
    {
        $user = new User('salah', '4040', false);
        $order = new Order($user);
        $order->proceed();

        // die(var_dump($order->getOrderLogs()));
        self::assertEquals(StateEnum::ARCHIVED_STATE, $order->getState()->getState());
    }
}
