<?php

namespace App\Controllers;

use App\Libraries\Home;

/**
 * Class IndexController
 * @package App\Controllers
 */
class IndexController extends ParentController
{
    public function homeAction()
    {
        $home = new Home();
        $home->test();

        $this->view->setVariables([
            'events' => $home->getEvents(),
        ]);
    }
}
