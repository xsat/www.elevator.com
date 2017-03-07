<?php

namespace App\Interfaces;

/**
 * Interface MoveInterface
 * @package App\Interfaces
 */
interface MoveInterface
{
    /**
     * @param int $number
     * @return bool
     */
    public function move($number);
}
