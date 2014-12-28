<?php

namespace Application\Controller;

use Phalcon\Mvc\Controller as ControllerBase;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
    }
    
    public function aboutMeAction()
    {
        $this->view->setVar('title', 'About Me');
        $this->view->setVar('msg', 'Hello Phalex');
    }
}
