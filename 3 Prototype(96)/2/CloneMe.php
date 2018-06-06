<?php
//CloneMe.php
abstract class CloneMe {
	public $name;
	public $picture;
	abstract function __clone();
}

class Person extends CloneMe {
	public function __construct() {
		$this->picture = "http://grzesiek-tarka.ct8.pl/img/upload/6/titleimg/900_laravel-5.5.jpg";
		$this->name = "Oryginalny";
	}
	public function display() {
		echo "<img src='$this->picture'>";
		echo "<br/>$this->name <p/>";
	}
	function __clone() {}
}
$worker = new Person();
$worker->display();
$slacker = clone $worker;
$slacker->name = "Sklonowany";
$slacker->display();
?>