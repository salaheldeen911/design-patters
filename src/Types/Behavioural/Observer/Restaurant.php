<?php


namespace App\Types\Behavioural\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class Restaurant implements SplSubject // where the event dispatch
{
    private $observers;
    private $orederNumber = 0;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function addNewOrder(): void
    {
        $this->orederNumber += 1;
        $this->notify();
    }

    public function getOrderNumber(): int
    {
        return $this->orederNumber;
    }
}
