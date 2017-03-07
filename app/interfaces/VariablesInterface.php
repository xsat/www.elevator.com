<?php

namespace App\Interfaces;

/**
 * Interface VariablesInterface
 * @package App\Interfaces
 */
interface VariablesInterface
{
    /**
     * @return array
     */
    public function getVariables();

    /**
     * @param array $variables
     */
    public function setVariables(array $variables);
}
