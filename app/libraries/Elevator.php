<?php

namespace App\Libraries;

use App\Interfaces\MoveInterface;
use App\Interfaces\NumberInterface;
use App\Interfaces\CurrentInterface;

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
     * @param int $min
     * @param int $max
     */
    private function createLevels($min, $max)
    {
        foreach (range($min, $max) as $number) {
            $this->levels[] = new Level($number, $min == $number); // Sets first item as current
        }
    }

    /**
     * @param int $number
     * @return bool
     */
    public function move($number)
    {
        $current = $this->getCurrent();
        if (!$current) {
            return false;
        }

        $coming = null;

        if ($number > $current->getNumber()) {
            $coming = $this->getNext($current->getNumber());
        } elseif ($number < $current->getNumber()) {
            $coming = $this->getPrev($current->getNumber());
        }

        if ($coming) {
            $current->setCurrent(false);
            $coming->setCurrent(true);

            return true;
        }

        return false;
    }

    /**
     * @return NumberInterface|CurrentInterface|null
     */
    public function getCurrent()
    {
        /**
         * @var CurrentInterface $level
         */
        foreach ($this->levels as $level) {
            if ($level->isCurrent()) {
                return $level;
            }
        }

        return null;
    }

    /**
     * @param int $number
     * @return NumberInterface|CurrentInterface|null
     */
    private function getPrev($number)
    {
       return $this->findFirst(--$number);
    }

    /**
     * @param int $number
     * @return NumberInterface|CurrentInterface|null
     */
    private function getNext($number)
    {
        return $this->findFirst(++$number);
    }

    /**
     * @param int $number
     * @return NumberInterface|CurrentInterface|null
     */
    private function findFirst($number)
    {
        /**
         * @var NumberInterface $level
         */
        foreach ($this->levels as $level) {
            if ($level->getNumber() == $number) {
                return $level;
            }
        }

        return null;
    }
}
