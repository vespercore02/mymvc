<?php

/**
 * 
 * @param $view to look up on the file Views and Models folder
 * 
 * 
 */
class Controller 
{
    
    public function loadView($view)
    {
        # code...

        require 'Views/'.$view.'.php';
    }

    public function loadModel($view)
    {
        # code...

        require 'Models/'.$view.'.php';
    }
}


?>