<?php

/**
 * 
 * @package Database
 * 
 * @var $host for the host
 * @var $db_name for the database name
 * @var $username for database user access
 * @var $password for the database user access password
 * @var $conn for the reply database connection
 * 
 * @param getConnection to have connection to database
 */

class Database{
  
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "mvc_crud";
    private $username = "root";
    private $password = "";
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