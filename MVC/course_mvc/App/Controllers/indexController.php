<?php

namespace App\Controllers;

class indexController 
{
    private $view;
    
    public function __construct() 
    {
        $this->view =  new \stdClass;
        
    }

        public function index()
    {  
            $this->view->cars =  array("Mustang", "Ferrari");       
            
    }
    
   public function contact()
    {   
       $cars = array("Porsche", "Dodge");
       include_once "../App/Views/index/contact.phtml";
        
    }
    
   public function  render() 
   {
     $current = get_class($this);
        
   }
}
