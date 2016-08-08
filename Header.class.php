<?php
namespace Http\Client;
use Exception;

final class Header implements PairsEnable{
    
    private $header=array();
    private $key;
    private $value;

    public function __construct() {
        
    }
    public function getKey(){
        return $this->key;
    }
    
    public function getValue() {
        return $this->value;
    }
    
    
    
}