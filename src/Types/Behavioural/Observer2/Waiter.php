<?php


namespace App\Types\Behavioural\Observer2;

class Waiter implements RestaurantWorkerInterface
{
    private $state;

    public function fire($object): void
    {
        /** @var Restaurant $subject */

        $this->state = sprintf('Waiter is ready for order number %s', $object->getOrderNumber());
    }

    public function getState()
    {
        return $this->state;
    }
}
