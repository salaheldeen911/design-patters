<?php


namespace App\Types\Behavioural\Mediator;

abstract class Road
{
    protected string $status = "";
    // private MediatorInterface $mediator;

    public const STOP_EVENT = "STOP";
    public const MOVE_EVENT = "MOVE";

    abstract function getId(): string;

    // public function setMediator(MediatorInterface $mediator){
    //     $this->mediator = $mediator;
    // }

    public function move()
    {
        $this->status = self::MOVE_EVENT;
    }
    public function stop()
    {
        $this->status = self::STOP_EVENT;
    }

    public function getRoadStatus(): string
    {
        return $this->status;
    }
}
