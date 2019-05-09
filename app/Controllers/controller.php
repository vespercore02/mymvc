<?php

/**
 * @package construct db connection from Database
 * 
 * @param $view to look up on the views folder
 * @param $data to where data reference to look on the database
 * 
 * @param Account view() to echo the data from account model
 * 
 */

class Controller {
    private $db;
    public function __construct(Database $db) {
        $this->db = $db;
    }
    
    public function loadView($view, $data){

        $file = 'views/'.$view.'.php';

        if (file_exists($file)) {
            # code...

            $get = new Account($this->db);
            
            if (!empty($data)) {
                # code...
                
                switch ($view) {
                    case 'Account':
                        # code...
                        /**
                         * 
                         * @var trying to get the info from database
                         * 
                         * 
                         */
                        $get->id = $data;

                        print_r($data); 
                        //print_r($get->view());
                        echo Account::view();

                        break;
                    
                    default:
                        # code...
                        break;
                }
            }

            
        }else {
            # code...

            $view = "error";
        }

        require 'views/'.$view.'.php';
        



    }

   
}


?>