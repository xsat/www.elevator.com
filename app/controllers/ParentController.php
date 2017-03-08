<?php

namespace App\Controllers;

use App\Interfaces\VariablesInterface;

/**
 * Class ParentController
 * @package App\Controllers
 */
class ParentController
{
    /**
     * @var VariablesInterface
     */
    protected $view = null;

    /**
     * ParentController constructor.
     * @param VariablesInterface $view
     */
    public function __construct(VariablesInterface $view)
    {
        $this->view = $view;
    }
}
