<?php
//plik wyzwalający
//Ten plik może zostać zastąpiony
//poprzez zapisanie poniższego
//kodu w klasie Client
function __autoload($class_name) {
	include $class_name . '.php';
}
$worker = new Client();
?>