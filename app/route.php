<?php 

Route::getPage('index', function(){
    Controller::loadView('Header');
    Controller::loadView('Home');
    Controller::loadView('Footer');
});

Route::getPage('AboutUs', function(){
    //echo "About Us";
    Controller::loadView('AboutUs');
});

Route::postPage('AboutUs', function(){
    //echo $_POST['test'];
    //AboutUs::loadView('AboutUs');
});

Route::getPage('ContactUs', function(){
    //echo "Contact Us";
    Controller::loadView('ContactUs');
});

Route::postPage('Login', function(){
    //echo "Contact Us";
    Controller::loadModel('Login');
    Login::$username = $_POST['username'];
    Login::$password = $_POST['password'];
    
    if ((Login::checkAccount())) {
        
        //$data 
        echo "<h3>Succesful</h3>";

        foreach (Login::checkAccount() as $value) {
            # code...
            echo $value['location']."<br>";
            echo $value['location']."<br>";
        }

    }else {
        echo "Mali";
    }
});

Route::getPage('Login', function(){
    //echo "Contact Us";
    Controller::loadView('Login');
});

Route::getPage("Account", function(){
    //echo "Contact Us";
    Controller::loadView('Account');
    //$accounts = Account::viewAccounts();
});

Route::getPage("Account/{id}", function($id){
    //echo "Member $id";
    Account::$id = $id;
    //$accounts = Account::getPageId();
    
    Controller::loadView('AccountId');
    
});

Route::postPage('Forms', function(){
    
    Controller::loadModel('Forms');
    Forms::$username = $_POST['username'];
    Forms::$password = $_POST['password'];
    Forms::$location = $_POST['location'];
    
    if ((Account::checkAccount() == false)) {
        
        //$data = ;
        print_r(Forms::addAccount());
        

    }else {
        echo "Meron";
    }


});

Route::getPage('Forms', function(){
    //echo "About Us";
    Controller::loadView('Forms');
});

?>