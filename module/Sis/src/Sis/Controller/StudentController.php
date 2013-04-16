<?php
namespace Sis\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
//use Student\Model\Student;          
use Sis\Form\AddStudentForm as AddStudentForm; 
use Sis\Form\AddStudentFilter as AddStudentFilter; 

class StudentController extends AbstractActionController
{
    public $test;
    public function indexAction()
    {
       
        /*return new ViewModel(array(
            'students' => $this->getStudentTable()->fetchAll(),
        ));*/
        $this->test = "adfasdf";
        return $this->test;
    }
    
    public function getStudentTable()
    {
        if (!$this->stuentTable) {
            $sm = $this->getServiceLocator();
            $this->studentTable = $sm->get('Sis\Model\StudentTable');
        }
        return $this->studentTable;
    }
    
    public function addStudentAction()
    {
        $form = new AddStudentForm();
        $form->setInputFilter(new AddStudentFilter());
        
        $request = $this->getRequest();
        if($request->isPost()) {
            $form->setData($request->getPost());
            if($form->isValid()){
                
            }
        }
        return array('form' => $form);
    }
   
}