<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Login\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
 
class SuccessController extends AbstractActionController
{
    public function indexAction()
    {
        if (! $this->getServiceLocator()
                 ->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('login');
        }
         
        return new ViewModel();
    }
}
