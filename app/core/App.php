<?php

class App {
    
    //default controller for the mvc
    protected $controller = 'home';
    
    //default method for the mvc
    protected $method = 'index';
    
    // if parameters are pass through the url
    protected $params = [];
    
    
    public function __construct() {
        $url = $this->parseUrl();
    }
    
    public function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/', filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
        }
    }
}
