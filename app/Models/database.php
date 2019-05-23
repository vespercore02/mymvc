<?php 

class Database
{
    // specify your own database credentials
    public static $host = "localhost";
    public static $db_name = "mvc_crud";
    public static $username = "root";
    public static $password = "";
  
    /**
     * connect
     *
     * @return database connection
     */
    public static function connect()
    {
        $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    
}


?>