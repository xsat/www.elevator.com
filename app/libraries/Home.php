<?php

namespace App\Libraries;

/**
 * Class Home
 * @package App\Libraries
 */
class Home
{
    /**
     * @var Elevator
     */
    private $elevator = null;

    /**
     * @var Person
     */
    private $person = null;

    /**
     * @var queued = null
     */
    private $queued = null;

    /**
     * Home constructor.
     */
    public function __construct()
    {
        $this->elevator = new Elevator(10);
        $this->person = new Person('Karl');
        $this->queued = new Queued();

        /*var_dump($this->elevator->current()->getNumber());

        while ($this->elevator->move(5)) {
            var_dump($this->elevator->current()->getNumber());
        }

        while ($this->elevator->move(2)) {
            var_dump($this->elevator->current()->getNumber());
        }

        while ($this->elevator->move(20)) {
            var_dump($this->elevator->current()->getNumber());
        }

        while ($this->elevator->move(-10)) {
            var_dump($this->elevator->current()->getNumber());
        }

        exit;*/
    }
}
