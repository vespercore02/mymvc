<?php

require 'router.php';
require 'Controllers/controller.php';
require 'Models/database.php';
require 'Models/account.php';

$database = new Database();
$db = $database->getConnection();

/**
 * 
 * @var $page = URI
 * @var $page will check on @package Router
 * 
 */

//echo "<br>".$_SERVER['REQUEST_URI'];

$page = new Router($db);

$page->loadPage();

?>
