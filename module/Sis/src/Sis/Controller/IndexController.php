<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Sis\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Sis\Model\Student;  
use Sis\Form\AddStudentForm; 

class IndexController extends AbstractActionController
{
    public function indexAction() {
      
    }
    
    public function getStudentTable()
    {
        if (!$this->stuentTable) {
            $sm = $this->getServiceLocator();
            $this->studentTable = $sm->get('Sis\Model\StudentTable');
        }
        return $this->studentTable;
    } 
    
}
?>
