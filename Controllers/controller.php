<?php

class Controller {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    
    public function index(){

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, "/");
        $url = explode("/", $url);

        //print_r($url);
        
        if(empty($url[0])){
            require 'views/home.php';
        }else{
            //echo $url[0];
            
            $file = "views/". $url[0] .".php";

            if (file_exists($file)) {
                # code...
                //require $file;
                //echo $file;
                
                switch($url[0]){

                    case 'registry':
                        # code...
                        if (isset($_POST['register'])) {
                            # code...
                            //echo $_POST['username']." ".$_POST['password']." ".$_POST['location'];

                            $account = new Account($this->db);
                            
                            $account->username = $_POST['username'];
                            $account->password = $_POST['password'];
                            $account->location = $_POST['location'];

                            
                            if($account->create()){
                                $result = "<div class='alert alert-success'>Account was created.</div>";
                            }
                         
                            // if unable to create the product, tell the user
                            else{
                                $result = "<div class='alert alert-danger'>Unable to create product.</div>";
                            }

                            
                        }
                        require 'views/header.php';
                        require $file;
                        require 'views/footer.php';
                        break;
                }

            }else {
                # code...
                //throw new Exception("The file $file does not exists.");
                require 'views/error.php';
                return false;
            }
        }
    }
}


?>