<?php

final class HttpGet implements RequestMethod{
    private final $method = "GET";
    private $uri;
    
    public function __construct($uri){
        $this->uri = $uri;
    }
    public function getMethod(){
        return $this->method;
    }
}