<?php
class cn{
    private $host;
    private $user;
    private $pass;
    private $database;

    function __construct(){
        $this->host = "localhost";
        $this->user="root";
        $this->pass="";
        $this->database="prueba_mvc";
    }

    public function conectar(){
        $cn = new mysqli($this->host, $this->user, $this->pass, $this->database);
        if($cn->connect_error==""){
            return $cn;
        }else{
            return null;
        }
    }
}