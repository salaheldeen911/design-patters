<?php

namespace App\Types\Behavioural\ChainOfResponsibility2;

class Request
{
    private bool $done = false;
    private string $handler;
    private int $id = 0;

    public function setDone($done)
    {
        $this->done = $done;
    }

    public function setHandler($handler)
    {
        $this->handler = $handler;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function gethandler()
    {
        return $this->handler;
    }

    public function getDone()
    {
        return $this->done;
    }

    public function getId()
    {
        return $this->id;
    }
}
