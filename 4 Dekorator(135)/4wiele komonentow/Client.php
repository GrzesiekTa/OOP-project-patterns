<?php
//Client.php
/*Grupy wiekowe:
18-29: Grupa 1
30-39: Grupa 2
40-49: Grupa 3
50+ : Grupa 4
 */
function __autoload($class_name) {
	include $class_name . '.php';
}
class Client {
	//$hotDate to instancja komponentu
	private $hotDate;
	public function __construct() {
		$this->hotDate = new Female();
		$this->hotDate->setAge("Grupa wiekowa 4");
		echo $this->hotDate->getAge();
		$this->hotDate = $this->wrapComponent($this->hotDate);
		echo $this->hotDate->getFeature();
	}
	private function wrapComponent(IComponent $component) {
		$component = new ProgramLang($component);
		$component->setFeature("php");
		$component = new Hardware($component);
		$component->setFeature("lin");
		$component = new Food($component);
		$component->setFeature("veg");
		$component = new Film($component);
		$component->setFeature("hor");

		return $component;
	}
}
$worker = new Client()
?>