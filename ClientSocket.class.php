<?php 
namespace Http\Client;
use Exception;

class ClientSocket{
	private $socket;
	private $host;
	private $port;
	private $response;
        private $UUID;

	private function checkError($result){

		if($result===false){
			$errorcode = socket_last_error();
    			$errormsg = socket_strerror($errorcode);
			throw new \Exception($errormsg);
		}
	}

	public function __construct($host,$port=80){
		$this->host=$host;
		$this->port=$port;
		$this->socket = socket_create(AF_INET, SOCK_STREAM, 0);
		$this->checkError($this->socket);
		
		
	}

	public function connect(){
		$result = socket_connect($this->socket,$this->host,$this->port); 
		$this->checkError($result);
	}

	public function write($message){
		$write = socket_write($this->socket, $message, strlen($message));
		$this->checkError($write);
	}

	public function read($length=1024){
		if(($responsePart = socket_read($this->socket,$length))!==false){
			$this->response .=$responsePart; 
		}else{
			$this->checkError($responsePart);
		}	
		return $this->response;
	}
        
        public function readLine(){
            
        }

	public function close(){
		socket_close($this->socket);
	}

        public function setUUID($UUID){
            $this->UUID= UUID;
        }
        
        public function getUUID(){
            return $this->UUID;
        }
}



?>
