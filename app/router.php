<?php

/**
 * @package loadPage
 * @var $page will get the uri
 * @var $uri trim the page "/" and explode to get @var $uri[1]
 * @var $cont construct db for controller
 * @subpackage loadView(page, data)
 * 
 */

class Router
{
    
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }


    public function loadPage()
    {
        $page = $_SERVER['REQUEST_URI'];
        
        //echo $page."<br>";
        $uri = trim($page, "/");
        $uri = explode("/", $uri);

        //$this->conn = new Controller($this->db);

        //var_dump($this->conn);

        $cont = new Controller($this->db);
        
        if (empty($uri[1])) {
            # code...
            
            //Controller::loadView("home", 0);
            $cont->loadView("home", 0);

        } else {

            if (isset($uri[2])) {
                # code...
                
                //Controller::loadView($uri[1], $uri[2]);
                $cont->loadView($uri[1], $uri[2]);

            }elseif($uri[1]){
                # code...
                
                //Controller::loadView($uri[1], 0);
                $cont->loadView($uri[1], 0);
                
            } else {
                # code...

                //Controller::loadView($uri[0], 0);
                $cont->loadView($uri[1], 0);

            }
        }
    }

}

?>