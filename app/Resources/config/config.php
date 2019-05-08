<?php

class Database{
  
    // specify your own database credentials
    private $host = "mvc-mariadb";
    private $db_name = "mvc_crud";
    private $username = "mvc";
    private $password = "mvc";
    public $conn;
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
}

?>