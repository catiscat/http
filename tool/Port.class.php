<?php

final class Port{

    static public function getPort($scheme){
        if($scheme=="https"){
            return 443;
        }else{
            return 80;
        }
    }  
    
}