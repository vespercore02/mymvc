<?php

require __DIR__ . '/vendor/autoload.php';

require 'router.php';
require 'Resources/config/config.php';
require 'Controllers/controller.php';
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


?>
