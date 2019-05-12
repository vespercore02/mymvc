<?php

/**
 * @package Account 
 * @var $conn for the database connection
 * @var $table_name is for the name of the table
 * 
 * @var $id for the id of the search account
 * @var $username is for the register username
 * @var $password is the desire password
 * @var $location is the location of the user
 * 
 * @param create to register $username, $password and $location return true or false
 * @param view to view and get registered id information
 */

class Account {

    private $conn;
    private $table_name = "account";
    
    public $id;
    public $username;
    public $password;
    public $location;

    public function __construct($db){
        $this->conn = $db;
    }

    function create(){

        $query = "INSERT INTO 
                    ". $this->table_name ."
                   SET 
                    username=:username, password=:password, location=:location";

        $stmt = $this->conn->prepare($query);

        $this->username=htmlspecialchars(strip_tags($this->username));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->location=htmlspecialchars(strip_tags($this->location));

        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":location", $this->location);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function view()
    {
        $query = "Select * from 
                    ". $this->table_name ."
                   where 
                    account_id=:id";

        $stmt = $this->conn->prepare($query);

        $this->id=htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(":id", $this->id);

        $success = $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return ($success) ? $rows: [];
    }
}


?>