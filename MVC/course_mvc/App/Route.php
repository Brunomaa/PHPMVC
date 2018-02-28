<?php

namespace App;

class Route {
    private $routes;
    
    public function _construct()
    {
        
        
    }
    public function initRoutes()
    {
        $routes['home'] = array('route'=>'/','controller'=>"indexcontroller",'action'=>'index');
        $routes['contact'] = array('route'=>'/contact','controller'=>"indexcontroller",'action'=>'contact');       
        
    }
    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }    
       
    }
