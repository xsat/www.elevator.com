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
     * Home constructor.
     */
    public function __construct()
    {
        $this->elevator = new Elevator(10);
        $this->person = new Person('Karl');
    }
}
