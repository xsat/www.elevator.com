<?php

namespace App\Libraries;

use App\Interfaces\NameInterface;
use App\Interfaces\LevelInterface;

/**
 * Class Person
 * @package App\Libraries
 */
class Person implements NameInterface, LevelInterface
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

    /**
     * @param int $min
     * @param int $max
     * @return int
     */
    public function getLevel($min, $max)
    {
        return mt_rand($min, $max);
    }
}
