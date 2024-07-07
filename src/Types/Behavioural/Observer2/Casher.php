<?php


namespace App\Types\Behavioural\Observer2;

class Casher implements RestaurantWorkerInterface
{
    private $state;

    public function fire($object)
    {
        /** @var Restaurant $subject */

        $this->state = sprintf('Casher is ready for order number %s', $object->getOrderNumber());
    }


    public function getState()
    {
        return $this->state;
    }
}
