<?php

class Request 
{
    private $method;
    private $protocol; 
    private $server_ip;
    private $remote_ip;
    private $resource;
    private $params= array();
    
  public function __construct($method, $protocol, $server_ip, $remote_ip, $resource, $params){
	$this->method=$method;	
	$this->protocol=$protocol;	
	$this->server_ip=$server_ip;
	$this->remote_ip=$remote_ip;	
	$this->resource=$resource;	
	$this->paramenters=$params;
  } 
   public function __toString(){
	$param = "";
	return $this->protocol.'://'.$this->server_ip.'/'.$this->resource.'?'.$param;
 	foreach($params as $param){
  	return $request = $param;
  	}
  }
   public function getmethod($method){
      return $this->method=$method;
  }
  public function setmethod(){
      $this->method=$method;
  }
  public function geprotocol($protocol){
      return $this->protocol=$protocol;
  }
  public function setprotocol(){
      $this->protocol=$protocol;
  }
  public function getserver_ip($server_ip){
      return $this->server_ip=$server_ip;
  }
  public function setserver_ip(){
      $this->server_ip=$server_ip;
  }
  public function getremote_ip(){
      return $this->remote_ip;
  }
  public function setremote_ip(){
      $this->remote_ip=$remote_ip;
  }
  public function getresource($resource){
      return $this->resource=$resource;
  }
  public function setresource(){
      $this->resource=$resource;
  }
  public function getparams($params){
      return $this->params=$params;
  }
  public function setparams(){
      $this->params=$params;
  }
}
