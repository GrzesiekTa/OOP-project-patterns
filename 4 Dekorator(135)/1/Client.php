<?php
//Client.php
function __autoload($class_name) {
	include $class_name . '.php';
}
class Client {
	private $basicSite;
	public function __construct() {
		$this->basicSite = new BasicSite();
		$this->basicSite = $this->wrapComponent($this->basicSite);
		$siteShow = $this->basicSite->getSite();
		$format = "<br/>&nbsp;&nbsp;<strong>Suma= $";
		$price = $this->basicSite->getPrice();
		echo $siteShow . $format . $price . "</strong><p/>";
	}
	private function wrapComponent(IComponent $component) {
		$component = new Maintenance($component);
		$component = new Video($component);
		$component = new DataBase($component);
		$component = new Mp3($component);
		return $component;
	}
}
$worker = new Client()
?>