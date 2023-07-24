<?php


class router
{
    public $router;
    public function get($uri,$controller)
    {
        $this->router [] = [
            'uri'=> $uri,
            'controller'=> $controller,
            'method'=>"GET"
        ];
    }
    public function post($uri,$controller)
    {
        $this->router [] = [
            'uri'=> $uri,
            'controller'=> $controller,
            'method'=>"POST"
        ];
    }
    public function check()
    {
        foreach ($this->router as $routes){
            if($routes['uri'] === $_SERVER['REQUEST_URI'] && $routes['method'] ===  $_SERVER['REQUEST_METHOD']){
                return $routes['controller'];
            }
        }
    }
}