<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

require_once("site.php");

require_once("admin.php");

require_once("admin-users.php");

require_once("admin-login.php");

require_once("admin-products.php");

require_once("admin-laboratories.php");

require_once("admin-therapeutic_classes.php");

require_once("admin-active_principles.php");

require_once("functions.php");

$app->run();

 ?>