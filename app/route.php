<?php

$route = new Route($_SERVER['REQUEST_URI']);

$route->getPage('GET', '/route/', function(){

    Controller::loadView('Home');

});

$route->getPage('GET', '/route/AboutUs', function(){
    
    Controller::loadView('AboutUs');

});

$route->getPage('GET', "/route/Account", function(){
    
    Controller::loadView('Account');
    
});

$route->getPage('GET', "/route/Account/{id}", function($id){

    Account::$id = $id;

    Controller::loadView('AccountId');
    
});

$route->getPage('GET', '/route/Forms', function(){
    
    Controller::loadView('Forms');

});

$route->getPage('POST', '/route/Forms', function(){
    
    Controller::loadModel('Forms');
    Forms::$username = $_POST['username'];
    Forms::$password = $_POST['password'];
    Forms::$location = $_POST['location'];
    
    if ((Forms::checkAccount() == false)) {
        
        //$data = ;
        print_r(Forms::addAccount());
        

    }else {
        echo "Already Available";
    }
    
});

?>