<?php

/**
 * 
 * @param $view to look up on the file Views and Models folder
 * 
 * 
 */
class Controller 
{
    
    /**
     * loadView
     *
     * @param $view file name of view for Views folder
     *
     * @return void
     */
    public function loadView($view)
    {
        # code...

        require 'Views/'.$view.'.php';
    }

    /**
     * loadModel
     *
     * @param  $view file name of view for Models folder
     *
     * @return void
     */
    public function loadModel($view)
    {
        # code...

        require 'Models/'.$view.'.php';
    }
}


?>