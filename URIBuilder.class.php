<?php
namespace Http\Client;
use Exception;
require_once 'URI.class.php';
require_once 'Header.class.php';

final class URIBuilder{
    private $httpVersion = "HTTP1.1";
    private $host;
    private $path;
    private $scheme;
    private $params;
    private $headers;
    
    
    public function __construct() {
        $this->headers = new Header();
    }
    
    
    public function setHttpVersion($httpVersion) {
        $this->httpVersion = $httpVersion;
        return $this;
    }

    public function setHost($host) {
        $this->host = $host;
        return $this;
    }

    public function setPath($path) {
        $this->path = $path;
        return $this;
    }

    public function setParams($params) {
        $this->params = $params;
        return $this;
    }

    public function setHeaders($headers) {
        $this->headers = $headers;
        return $this;
    }

    
    public function setScheme($scheme){
        $this->scheme = $scheme;
        return $this;
    }
    
   
    public function buildURI(){
        $URI = new URI($this->scheme,
                       $this->host, 
                       $this->path, 
                       $this->params,
                       $this->httpVersion, 
                       $this->headers);
        return $URI;
    }
    
    public function setHeader($headerKey,$headerValue){
        $this->headers->setHeader($headerKey, $headerValue);
        return $this;
        
    }
    
    public function addParam($paramKey,$paramValue){
        //TODO
        return $this;
    }

   
}


$uriBuilder = new URIBuilder();
$uri = $uriBuilder
        ->setScheme("http")
        ->setHost("www.google.com")
        ->setPath("/")
        ->setHeader("HEEE", "aaaa")
        ->addParam("")
        ->buildURI();
echo $uri->toString();
