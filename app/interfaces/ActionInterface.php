<?php

namespace App\Interfaces;

/**
 * Interface ActionInterface
 * @package App\Interfaces
 */
interface ActionInterface
{
    /**
     * @param mixed $item
     */
    public function push($item);

    public function pop();
}
