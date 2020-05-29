<?php

class DB{

    private $host;
    private $dbname;
    private $username;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = constant("HOST");
        $this->dbname   = constant("DBNAME");
        $this->username = constant("USERNAME");
        $this->password = constant("PASSWORD");
        $this->charset  = constant("CHARSET");
    }

    public function connect(){
        try{
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES      => false
            ];
            $pdo = new PDO($connection, $this->username, $this->password, $options);
            return $pdo;
        }catch(PDOException $e){
            print_r("Error : " . $e->getMessage());
        }
    }
}