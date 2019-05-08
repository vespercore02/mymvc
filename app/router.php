<?php


class Router
{
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }

    public function index()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, "/");
        $url = explode("/", $url);
        
        if(empty($url[0])){

            /**
             * 
             * When url[0] is empty it will call home
             * 
             */

            require 'Views/home.php';

        }else{
            
            if (isset($url[1])) {
                # code...
                Controller::loadView($url[0], $url[1]);
            } else {
                # code...
                Controller::loadView($url[0], 0);
            }
            
        }

        
    }

}

?>