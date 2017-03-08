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
     * @var Queue = null
     */
    private $queue = null;

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
        $this->queue = new Queue();
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
    }
}
