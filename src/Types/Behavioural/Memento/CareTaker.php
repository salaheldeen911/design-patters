<?php


namespace App\Types\Behavioural\Memento;

use App\Types\Behavioural\Memento\CodeFile;

class CareTaker
{
    private Originator $originator;
    private $mementos = [];

    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
    }

    public function commit(): void
    {
        $this->mementos[] = $this->originator->save();
    }

    public function rollBack(): void
    {
        $memento = array_pop($this->mementos);
        $this->originator->CtrlZ($memento);
    }

    public function getMementos(): array
    {
        return $this->mementos;
    }
}
