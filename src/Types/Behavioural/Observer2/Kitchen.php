<?php


namespace App\Types\Behavioural\Observer2;

class Kitchen implements RestaurantWorkerInterface
{
    private $state;

    public function fire($object): void
    {
        /** @var Restaurant $subject */

        $this->state = sprintf('Kitchen is ready for order number %s', $object->getOrderNumber());
    }

    public function getState()
    {
        return $this->state;
    }
}
