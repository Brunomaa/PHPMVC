<?php

namespace App\Controllers\Action;

class indexController extends Action
{
 
        public function index()
    {  
            $this->view->cars =  array("Mustang", "Ferrari");       
            $this->render("index");
    }
    
   public function contact()
    {   
       $cars = array("Porsche", "Dodge");
       include_once "../App/Views/index/contact.phtml";
       $this->render("contact");
        
    }
    
  
}
 