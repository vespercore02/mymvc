<?php 

require 'route.php';

function __autoload($class)
{
    
    if (file_exists('Resources/'.$class.'.php')) {
        # code...
        require_once 'Resources/'.$class.'.php';

    }elseif (file_exists('Controllers/'.$class.'.php')) {
        
        require_once 'Controllers/'.$class.'.php';

        if (file_exists('Models/'.$class.'.php')) {
            # code...
            require_once 'Models/'.$class.'.php';
    
        }
        
    }elseif(file_exists('Models/'.$class.'.php')){
        require_once 'Models/'.$class.'.php';
    }
    
}

?>