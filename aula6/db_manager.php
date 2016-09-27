<?php

include_once ('request.php');
include_once ('resource_controller');

class DBConnector extends PDO {
   
    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;
    private $connector;	
   
    public function __construct(){
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'aula';
        $this->user = 'root';
        $this->pass = '';
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        parent::__construct( $dns, $this->user, $this->pass );
    }	
		
}
$result = (new DBConnector())->query('SELECT * FROM user');
$result->execute();
//$result->fetchAll(PDO::FETCH_ASSOC);

//$table = mysql_fetc_assoc($result);

//while  ($result->fetchAll(PDO::FETCH_ASSOC));
//print_r($result);

//$array = $stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($array);
