<?php

error_reporting(E_ALL);

ini_set('ignore_repeated_errors', TRUE);
ini_set('display_errors', FALSE);
ini_set('log_errors', TRUE);
ini_set("error_log", "/opt/lampp/htdocs/micaela/APPS-COMPLETA/php-error.log");

error_log("Inicio de app web");


require_once 'classes/error.php';
require_once 'classes/success.php';
require_once 'libs/database.php';
require_once 'libs/controller.php';
require_once 'libs/model.php';
require_once 'libs/view.php';
require_once 'libs/app.php';


require_once 'config/config.php';

$app= new App();

?>