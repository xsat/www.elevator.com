<?php

namespace App\Interfaces;

/**
 * Interface LevelInterface
 * @package App\Interfaces
 */
interface LevelInterface
{
    /**
     * @param int $min
     * @param int $max
     * @return int
     */
    public function getLevel($min, $max);
}
