<?php

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
                    id=:id";

        $stmt = $this->conn->prepare($query);

        $this->id=htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(":id", $this->id);

        $success = $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return ($success) ? $rows: [];
    }
}


?>