<?php


namespace App\Types\Behavioural\Observer2;

class Restaurant
{
    private array $subscribers = [];
    private $orederNumber = 0;

    public function subscribe(RestaurantWorkerInterface $restaurantWorker): void
    {
        $this->subscribers[] = $restaurantWorker;
    }

    public function detach(RestaurantWorkerInterface $restaurantWorker): void
    {
        unset($this->subscribers[$restaurantWorker]);
    }

    public function notify(): void
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->fire($this);
        }
    }

    public function addNewOrder()
    {
        $this->orederNumber += 1;
        $this->notify();
    }

    public function getOrderNumber(): int
    {
        return $this->orederNumber;
    }
}
