<?php

class HttpResponse{
    private $header;
    private $entity;
    
    public function getHeader($header){
        $this->header = $header;
        return $this->header;
    }
    
    public function getEntity($entity){
        $this->entity = $entity;
        return $this->entity;
    }
}
