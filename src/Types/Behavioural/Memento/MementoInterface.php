<?php


namespace App\Types\Behavioural\Memento;

interface MementoInterface
{
    public function getSnapShot();
}


/*
WHEN TO USE
Imagen you have a class (Originator) which has data and you want to store a state (COPY) of this data (oldData)
and this data changed by the time and you want reset it to the latest state (last copy) the (oldData) like this
$this->data = $oldData;

CLASS (Originator)

class originator
{
    private $data;

    public function save() // client code is in the CareTake CLASS ONLY
    {
        return new Memento($this->data); // Memento Class
    }

    public function restore(memento) // client code is in the CareTake CLASS ONLY
    {
        $this->data = $memento->getData();
    }

    public function ManpulateData() // just change the data
    {
        $this->data->manpulate();
    }
}

CLASS (Memento)
In this class, you will accept the data in the constructor and set it to a variable.
And will implements a (memento) function getData() (getSnapShot()) which returns the data.

class DataMemento implements Memento
{
    private $data;

    public function __constructor($data){
        $this->data = $data;
    }

    public function getData(){
        return $this->data;
    }
}

CLASS (CareTaker)
In this class, you will accept the Origenator class in the constructor and set it to a variable.
And has a variable of type array of mementos classes

class CareTaker
{
    private $mementos = [];
    private Originator $origenator;

    public function __constructor(Originator $origenator){
        $this->origenator = $origenator;
    }

    public function commit(){
        $this->mementos[] = $this->originator->save();
    }

    public function rollBack(){
        $lastMemento  = array_pop($this->mementos);
        $this->originator->restore($lastMemento);
    }
}
*/
