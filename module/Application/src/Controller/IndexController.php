<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
        // return $this->redirect()->toRoute("ruta"); ejemplo home
        // return $this->redirect()->toUrl("ruta"); ejemplo home
    }
}
