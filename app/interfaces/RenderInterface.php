<?php

namespace App\Interfaces;

/**
 * Interface RenderInterface
 * @package App\Interfaces
 */
interface RenderInterface
{
    /**
     * @return string
     */
    public function render();

    /**
     * @return string
     */
    public function content();

    /**
     * @param string $filename
     * @param array $data
     * @return string
     */
    public function partial($filename, array $data = []);
}
