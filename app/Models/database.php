<?php 

class Database
{
    // specify your own database credentials
    public static $host = "localhost";
    public static $db_name = "mvc_crud";
    public static $username = "root";
    public static $password = "";
  
    // get the database connection
    public static function connect()
    {
        $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public static function query($query, $params = array() )
    {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);
        if (explode(' ', $query)[0] == 'Select') {
            $data = $statement->fetchAll();
            return $data;
        }
    }
    
}


?>