<?php 

 namespace SON\Controller;

 abstract Class Action 

 {
    protected $view;
    private $action;
    
    public function __construct() 
    {
        $this->view =  new \stdClass;
        
    }
     protected function  render($action) 
 {
 
 $this->action = $action;  
 $current = get_class($this);
 $singleClassName= strtolower((str_replace("Controller","",str_replace("App\\Controllers\\","",$current))));
      include_once "../App/Views/".$singleClassName."/".$this->action.".phtml";
 }


}