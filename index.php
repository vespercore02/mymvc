<?php

require 'Resources/config/config.php';
require 'Controllers/controller.php';
require 'Models/model.php';
require 'Models/account.php';

$database = new Database();
$db = $database->getConnection();

$controller = new Controller($db);
$controller->index();

?>
