<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Student\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

Class AddStudentForm extends Form 
{
    public function __construct($name = null)
    {
        parent::__construct('addstudent');
        
        $this->add(array(
            'name' => 'fname',
            'type'=> 'Zend\Form\Element\Text', 
            'options' => array(
                'label' => 'First Name'
            ),
            'attributes' => array(
                'id' => 'fname'
            ),
        ));
        
        $this->add(array(
            'name' => 'lname',
            'type'=> 'Zend\Form\Element\Text', 
            'options' => array(
                'label' => 'Last Name'
            ),
            'attributes' => array(
                'id' => 'lname'
            ),
        ));
        
        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Add Student', 
                'class' => 'add-student'
            ),
        ));
        
    }
}

Class AddStudentFilter extends InputFilter 
{
    public function __construct()
    {
        $this->add(array(
           'name' => 'fname',
           'required' => true,
           'filters' => array (
                array ('name' => 'StringTrim'), 
            ),             
        ));
    }
}
?>