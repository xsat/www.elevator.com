<?php

namespace App;

use App\Interfaces\ApplicationInterface;
use App\Libraries\View;
use App\Controllers\IndexController;

/**
 * Class Application
 * @package App
 */
class Application implements ApplicationInterface
{
    /**
     * @var View
     */
    private $view = null;

    /**
     * @var IndexController
     */
    private $controller = null;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->view = new View();
        $this->controller = new IndexController($this->view);
    }

    /**
     * @return string
     */
    public function main()
    {
        $this->controller->homeAction();

        return $this->view->render();
    }
}
