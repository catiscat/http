<?php
namespace Http\Client;
use Exception;
require_once './tool/Args.php';

/* 
  @author: duck
 */


class URI{
    private $httpVersion = "HTTP1.1";
    private $host;
    private $path;
    private $scheme;
    private $params;
    private $headers;
    private $UUID;

    public function __construct($scheme,$host,$path,$params,$httpVersion,$headers){
        $this->UUID=uniqid();
        $this->scheme = $scheme;
        $this->host = $host;
        $this->path = $path;
        $this->params = $params;
        $this->httpVersion = $httpVersion;
        $this->headers = $headers;
    }
    
    public function getHost(){
        return $this->host;
    }
    
    public function getPath(){
        return $this->path;
    }
    
    public function getScheme(){
        return $this->scheme;
    }
    
    public function getParams(){
        return $this->params;
    }
    
    public function getHeaders($headers){
        $this->headers = $headers;
        return $this->headers;
    }
    private function parseUrl($string){
        
        if ($string!=null){
            $string = startsWith($string, "http")==true?$string:"http://".$string;
            $arr = parse_url($string);
            $this->host=$arr["host"];
            $this->path = $arr["path"]==""?"/":$arr["path"];
            $this->params=$arr["query"];
            $this->scheme = $arr["scheme"];
        }else{
            throw new Exception("null url");
        }
    }
    
    public function getUUID(){
        return $this->UUID;
    }
    
    public function toString(){
        return $this->scheme."://".$this->host.$this->path;
    }
}



?>
