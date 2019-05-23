<?php 

/**
 * 
 * @var id for id of account
 * @var $username for username of account
 * @var $password for password of account
 * @var $location for location of account
 * @var $table for table where account information can get
 */

class Account extends Database
{
    public static $id;
    public static $username;
    public static $password;
    public static $location;
    public static $table = 'account';

    /**
     * checkAccount
     *
     * @return if account if already exist
     */
    public static function checkAccount()
    {
        $query = "Select username from ". self::$table ." where 
                username = :username";
        $statement = self::connect()->prepare($query);
        $statement->bindparam(':username',self::$username);
        $statement->execute();

        $data = $statement->rowCount();

        return $data;
        
    }

    /**
     * viewAccounts
     *
     * @return table informations
     */
    public static function viewAccounts()
    {
        $query = "Select * from account ";
        $statement = self::connect()->prepare($query);
        $success = $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return ($success) ? $rows: 0;
    }

    
    /**
     * getId
     *
     * @return return information of the account_id
     */
    public static function getId()
    {
        $query      = "Select * from account where account_id = :account_id ";
        $statement  = self::connect()->prepare($query);
        $statement->bindparam(':account_id',self::$id);

        $success    = $statement->execute();
        $rows       = $statement->fetchAll(PDO::FETCH_ASSOC);
        return ($success) ? $rows: 0;
    }
}



?>