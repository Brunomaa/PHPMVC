<?php

namespace App;

class Route {
    private $routes;
    
    public function _construct()
    {
        $this->initRoutes();
        
    }
    public function initRoutes()
    {
        $routes['home'] = array('route'=>'/','controller'=>"indexcontroller",'action'=>'index');
        $routes['contact'] = array('route'=>'/contact','controller'=>"indexcontroller",'action'=>'contact');       
        $this->setRoute($routes);
    }
    
    public function run($url)
    {
        array_walk($this->routes, function($route) use ($url) {
            if()
        });
        
    }

        public function  setRoute(array $routes) 
    {
        $this->route = $routes;
        
    }


    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }    
       
    }
