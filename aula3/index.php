<?php

include ("request.php");

$method = $_SERVER['REQUEST_METHOD'];
$protocol = $_SERVER['SERVER_PROTOCOL'];
$server_ip = $_SERVER['SERVER_ADDR'];
$remote_ip = $_SERVER['REMOTE_ADDR'];
$resource = $_SERVER['REQUEST_URI'];
$params = $_SERVER['QUERY_STRING'];

$request = new Request($method, $protocol, $server_ip, $remote_ip, $resource, $params);
var_dump($request);
