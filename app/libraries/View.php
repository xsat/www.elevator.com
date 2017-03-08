<?php

namespace App\Libraries;

use App\Interfaces\VariablesInterface;
use App\Interfaces\RenderInterface;

/**
 * Class View
 * @package App\Libraries
 */
class View implements VariablesInterface, RenderInterface
{
    /**
     * @var string
     */
    private $ext = '.phtml';

    /**
     * @var string
     */
    private $dir = __DIR__ . '/../views/';

    /**
     * @var array
     */
    private $variables = [];

    /**
     * @return array
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * @param array $variables
     */
    public function setVariables(array $variables)
    {
        $this->variables = $variables;
    }

    /**
     * @return string
     */
    public function render()
    {
        return $this->partial('layout');
    }

    /**
     * @return string
     */
    public function content()
    {
        return $this->partial('index/home');
    }

    /**
     * @param string $filename
     * @param array $data
     * @return string
     * @throws Exception
     */
    public function partial($filename, array $data = [])
    {
        $file = $this->dir . $filename . $this->ext;
        if (!is_file($file)) {
            throw new Exception('Partial does not exist');
        }

        ob_start();

        if (!$data) {
            $data = $this->variables;
        }

        foreach ($data as $key => $value) {
            ${$key} = $value;
        }

        require $file;

        return ob_get_clean();
    }
}
