<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//displayTrigger.php
function __autoload($class_name) {
	include $class_name . '.php';
}
$trigger = new Client();
$trigger->showAll();
?>