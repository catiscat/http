<?php
namespace Http\Client;
use Exception;

require_once ("ClientSocket.class.php");

class HttpRequest{
        private $socket;
        private $pool=array();
        private $hasEntity=false;
	public function __construct(){
		
	}

        
        /**
         * 
         * @param URI $uri
         * @return HttpResponse
         */
	public function sendGet($uri){
            $httpGet = new HttpGet($uri);
            return $httpResponse;
	}
        
        /**
         * 
         * @param URI $uri
         * @param HttpEntity $entity
         * @return HttpResponse
         */
        public function sendPost($uri,$entity){
            $this->socket = $this->getNewSocket($uri);
            $pool[$socket->getUUID()]= $this->socket;
            return $httpResponse;
        }

        private function getNewSocket($uri){
            $port = Port::getPort($uri->getScheme());
            $host = $uri->getHost();
            $this->socket = new ClientSocket($host,$port);
            $this->socket->setUUID($uri->getUUID());
        }
        
        /**
         * 
         * @return HttpResponse
         */
        private function receiveHeader(){
            
            return $httpResponse;
        }
        
        /**
         * 
         * @return HttpResponse
         */
        private function receiveEntity(){
    
            return $httpResponse;
        }
        



        
        public function receive(){
            $this->receiveHeader();
            if($this->hasEntity){
                $this->receiveEntity();
            }
            
            return $httpResponse;
	}
}




$url = "http://www.hypers.com/robots.txt";
$httpRequest = new HttpRequest($url);
$httpRequest -> setMethod("POST");
$httpRequest -> setHeader("Referer","http://www.hypers.com");
$httpRequest -> setBody("username=hello&password=world");
$httpResponse = $httpRequest -> send();
$httpResponse ->getResponseHeader();
$httpResponse ->getResponseBody();

?>
