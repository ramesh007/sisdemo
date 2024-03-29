<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Login\Model;
 
use Zend\Authentication\Storage;
 
class MyAuthStorage extends Storage\Session
{
    public function setRememberMe($rememberMe = 0, $time = 1209600)
    {
         if ($rememberMe == 1) {
             $this->session->getManager()->rememberMe($time);
         }
    }
     
    public function forgetMe()
    {
        $this->session->getManager()->forgetMe();
    } 
}
