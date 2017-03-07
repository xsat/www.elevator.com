<?php

namespace App\Libraries;

use App\Interfaces\MoveInterface;

/**
 * Class Elevator
 * @package App\Libraries
 */
class Elevator implements MoveInterface
{
    /**
     * @var array
     */
    private $levels = [];

    /**
     * Elevator constructor.
     * @param int $size
     */
    public function __construct($size)
    {
        $this->createLevels(0, $size);
    }

    /**
     * @param int $low
     * @param int $high
     */
    private function createLevels($low, $high)
    {
        foreach (range($low, $high) as $number) {
            $this->levels[] = new Level($number, $low == $number); // Sets first item as current
        }
    }

    /**
     * @param int $number
     * @return bool
     */
    public function move($number)
    {
        return false;
    }
}
