<?php

namespace App\Libraries;

use App\Interfaces\EventsInterface;
use App\Interfaces\TestInterface;

/**
 * Class Home
 * @package App\Libraries
 */
class Home implements EventsInterface, TestInterface
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
     * @var array
     */
    private $events = [];

    /**
     * Home constructor.
     */
    public function __construct()
    {
        $this->elevator = new Elevator(10);
        $this->person = new Person('Karl');
    }

    /**
     * @return array
     */
    public function getEvents()
    {
        return $this->events;
    }

    public function test()
    {
        $this->events[] = 'Hi my name is ' . $this->person->getName();
        $this->events[] = 'I\'m on ' . $this->elevator->getCurrentNumber() . 'th floor';

        $randFloor = $this->person->getLevel(1, 10);
        $this->events[] = 'I want to go on ' . $randFloor . 'th floor';
        $this->events[] = 'I\'m entering the elevator';

        while ($this->elevator->move($randFloor)) {
            $this->events[] = 'The elevator is going to ' . $this->elevator->getCurrentNumber() . 'th floor';
        }

        $this->events[] = 'I\'m getting out of the elevator';

        $randFloor = $this->person->getLevel(1, 10);
        $this->events[] = 'I want to go on ' . $randFloor . 'th floor';
        $this->events[] = 'I\'m entering the elevator';

        while ($this->elevator->move($randFloor)) {
            $this->events[] = 'The elevator is going to ' . $this->elevator->getCurrentNumber() . 'th floor';
        }

        $this->events[] = 'I\'m getting out of the elevator';
    }
}
