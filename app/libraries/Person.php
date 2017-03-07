<?php

namespace App\Libraries;

use App\Interfaces\NameInterface;
use App\Interfaces\ActionInterface;
use App\Interfaces\PushInterface;

/**
 * Class Person
 * @package App\Libraries
 */
class Person implements NameInterface, ActionInterface, PushInterface
{
    /**
     * @var string
     */
    private $name = '';

    /**
     * Person constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
