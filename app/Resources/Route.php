<?php 

class Route{
    
    public static function getPage($route, $function)
    {
        
       if (self::checkRoute($route) == true) {
            //echo self::checkRoute($route);
            $url_exe = self::checkRoute($route);
            call_user_func($function, $url_exe);
       }
    }

    public static function postPage($route, $function)
    {
        if (isset($_POST['submit'])) {

            if (self::checkRoute($route)) {
                //echo self::checkRoute($route);
                $url_exe = self::checkRoute($route);
                call_user_func($function, $url_exe);
           }
        }
    }

    public function checkRoute($route) 
    {
        if (empty( $_GET['url'])) {
            $url = "index";
        }else{
            $url = $_GET['url'];
        }

        if ($route == $url) {

            return true;

        }else{
            
            $url = rtrim($url,'/');
            $url = explode('/', $url);
            
            $route = rtrim($route,'/');
            $route = explode('/', $route);

            if (sizeof($url) == sizeof($route)) {
            
                if ($route[0] == $url[0]) {
                    
                    $number = count($route)-1;
                    
                    $id = $url["$number"];
    
                    return $id;


                }elseif ($route[0] != $url[0]) {
                    # code...

                   return false;
                    
                }
                
            }
        }
    }
}


?>