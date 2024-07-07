<?php


namespace App\Types\Behavioural\Observer;

use SplObserver;
use SplSubject;

class Waiter implements SplObserver
{
    private $state;

    public function update(SplSubject $subject): void
    {
        /** @var Restaurant $subject */

        $this->state = sprintf('Waiter is ready for order number %s', $subject->getOrderNumber());
    }

    public function getState()
    {
        return $this->state;
    }
}
