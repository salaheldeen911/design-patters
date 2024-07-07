<?php


namespace App\Types\Behavioural\Observer;

use SplObserver;
use SplSubject;

class Casher implements SplObserver
{
    private $state;

    public function update(SplSubject $subject): void
    {
        /** @var Restaurant $subject */

        $this->state = sprintf('Casher is ready for order number %s', $subject->getOrderNumber());
    }


    public function getState()
    {
        return $this->state;
    }
}
