<?php

namespace Application\Controller;

use \Laminas\View\Model\ViewModel;

class AuthController extends \Laminas\Mvc\Controller\AbstractActionController
{
    public function loginAction()
    {
        $this->layout("layout/auth");
    }
}
