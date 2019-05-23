<?php 

class Route
{

    public $request_uri     = "";
    public $request_method  = "";

    public function __construct($uri)
    {
        $this->request_uri = $uri;
        $this->request_method = $_SERVER['REQUEST_METHOD'];
    }
    
    /**
     * getPage
     *
     * @param  $method of request page
     * @param  $route of the file
     * @param  $function of the page
     *
     * @return if all true it will call the call_user_func
     */
    public function getPage($method, $route, $function)
    {
        
        if ($this->checkRoute($route)) {
            if ($this->checkMethod($method)) {
                call_user_func($function, $this->checkRoute($route));
            }
        }
       
    }

    /**
     * checkRoute
     *
     * @param  mixed $route of the file
     *
     * @return void
     */
    public function checkRoute($route)
    {
        $uri = $this->request_uri;

        if ($route == $uri) {

            return true;

        }else {
            
            $route  = rtrim($route,'/');
            $route  = explode("/", $route);

            $uri    = rtrim($uri,'/');
            $uri    = explode("/", $uri);

            if (count($route) == count($uri)) {
                
                if ($route[2] == $uri[2]) {
                    
                    $number = count($route)-1;
                    
                    $id = $uri["$number"];
    
                    return $id;

                }elseif ($route[2] != $uri[2]) {

                   return false;
                    
                }
            }

        }
    }

    /**
     * checkMethod
     *
     * @param  mixed $method of request page
     *
     * @return void
     */
    public function checkMethod($method)
    {
        if ($method == $this->request_method) {
            return true;
        }else {
            return false;
        }
    }

}


?>