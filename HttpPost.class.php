<?php

final class HttpPost implements RequestMethod{
    private final $method = "POST";
    private $uri;
    
    
    public function __construct($uri){
        $this->uri = $uri;
    }
    public function getMethod(){
        return $this->method;
    }
}