<?php
namespace Http\Client;
use Exception;
require_once 'Pair.class.php';
class Headers extends Pairs{
    public function getHeaders() {
        return $this->getPairs();
    }

    public function setHeaders($headers){
        $this-> setHeaders($headers);
    }
    
    
    public function getHeader($key){
        return $this->getPair($key);
    }
    
    public function setHeader($header){
        $this->setPair($header);
    }
}

$headers = new Headers();
$headers->getPair();