<?php

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

        return 'views/'.$view.'.php';
        



    }

   
}


?>