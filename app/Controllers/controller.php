<?php

class Controller {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    
    /**
     * 
     * loadView(view, data)
     * 
     */

    public function loadView($view, $data){

        require './Views/'.$view.'.php';

        if (!empty($data)) {
            # code...
                    
        }

    }

   
}


?>