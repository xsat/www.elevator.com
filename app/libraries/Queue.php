<?php

namespace App\Libraries;

use App\Interfaces\ActionInterface;

/**
 * Class Queue
 * @package App\Libraries
 */
class Queue implements ActionInterface
{
    /**
     * @var array
     */
    private $items = [];

    /**
     * @param mixed $item
     */
    public function push($item)
    {
        $this->items[] = $item;
    }

    public function pop()
    {
        array_pop($this->items);
    }
}
