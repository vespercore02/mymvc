<?php


class Router
{
    
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }


    public function loadPage()
    {
        $page = $_SERVER['REQUEST_URI'];
        
        $uri = trim($page, "/");
        $uri = explode("/", $uri);
        
        if (empty($uri[1])) {
            # code...
            
            Controller::loadView("home", 0);
            

        } else {

            if (isset($uri[2])) {
                # code...
                
                $this->db->loadView($uri[1], $uri[2]);

            }elseif($uri[1]){
                # code...
                
                Controller::loadView($uri[1], 0);
                
            } else {
                # code...

                Controller::loadView($uri[0], 0);

            }
        }
    }

}

