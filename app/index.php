<?php

require 'router.php';
require 'Controllers/controller.php';
require 'Models/database.php';
require 'Models/account.php';

$database = new Database();
$db = $database->getConnection();

/**
 * 
 * call Router
 * 
 */
$router = new Router($db);
$router->index();

//echo "<br>".$_SERVER['REQUEST_URI'];

?>
