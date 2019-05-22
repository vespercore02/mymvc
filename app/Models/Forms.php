<?php 
/**
 * 
 * @var id for id of account
 * @var $username for username of account
 * @var $password for password of account
 * @var $location for location of account
 * @var $table for table where account information can get
 */

class Forms extends Database
{
    public static $id;
    public static $username;
    public static $password;
    public static $location;
    public static $table = 'account';

    /**
     * @param function addAccount for registration of account to table
     *
     * @return lastInsertedId
     */
    public static function addAccount()
    {
        $db = self::connect();
        $query = "Insert into " . self::$table ." set
                username = :username,
                password = :password,
                location = :location ";
        $statement = $db->prepare($query);
        $statement->bindparam(':username',self::$username);
        $statement->bindparam(':password',self::$password);
        $statement->bindparam(':location',self::$location);
        $statement->execute();

        $data = $db->lastInsertId();
        
        return   $data; 
    }

}

?>