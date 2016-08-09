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
	$this->paramenters=$parameters;
  } 

  public function __toString(){
	$request = $this->protocol."://".$this->ip."/".$this->resource."/";
	foreach($parameters as $param){
	return $request = $param;
	}
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


