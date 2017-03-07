<?php

namespace App\Libraries;

use App\Interfaces\NumberInterface;
use App\Interfaces\CurrentInterface;

/**
 * Class Level
 * @package App\Libraries
 */
class Level implements NumberInterface, CurrentInterface
{
    /**
     * @var int
     */
    private $number = 0;

    /**
     * @var bool
     */
    private $current = false;

    /**
     * Level constructor.
     * @param int $number
     * @param bool $current
     */
    public function __construct($number, $current)
    {
        $this->number = $number;
        $this->current = $current;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return bool
     */
    public function isCurrent()
    {
        return $this->current;
    }

    /**
     * @param bool $current
     */
    public function setCurrent($current)
    {
        $this->current = $current;
    }
}
