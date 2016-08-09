<?php

class Request 
{

    private $method;
    private $protocol; 
    private $ip;
    private $resource;
    private $parameters;
    

  public function __construct($method,$protocol,$ip,$resource,$parameters){
	$this->method=$method;	
	$this->protocol=$protocol;	
	$this->ip=$ip;	
	$this->resource=$resource;	
	$this->paramenters=$method;	
  } 

  public function toString(){
	$request = $this->protocol."://".$this->ip."/".$this->resource."/";
	foreach($this->parameters as $key => $param){
	$request .= $key."=".$param;
		if($param != end($this->parameters))
 			$request .= "&amp";
	}
	return utf8_encode($request);
  }
  public function getmethod($method){
      return $this->method=$method;
  }
  public function setmethod(){
      return $this->method;
  }
  public function geprotocol($protocol){
      return $this->protocol=$protocol;
  }
  public function setprotocol(){
      return $this->protocol;
  }
  public function getip($ip){
      return $this->ip=$ip;
  }
  public function setip(){
      return $this->ip;
  }
  public function getresource($resource){
      return $this->resource=$resource;
  }
  public function setresource(){
      return $this->resource;
  }
  public function getparameters($parameters){
      return $this->parameters=$parameters;
  }
  public function setparameters(){
      return $this->parameters;
  }
}

$request = new URLRequest("http","127.0.0.1","resource",array("parameters1"=>123,"parameters2"=>789),"POST");
echo $request->toString();
