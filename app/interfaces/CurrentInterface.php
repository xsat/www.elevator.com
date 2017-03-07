<?php

namespace App\Interfaces;

/**
 * Interface CurrentInterface
 * @package App\Interfaces
 */
interface CurrentInterface
{
    /**
     * @return bool
     */
    public function isCurrent();

    /**
     * @param bool $current
     */
    public function setCurrent($current);
}
