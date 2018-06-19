<?php
//DataBase.php
//konkretny dekorator
class DataBase extends Decorator {
	public function __construct(IComponent $siteNow) {
		$this->site = $siteNow;
	}
	public function getSite() {
		$fmat = "<br/>&nbsp;&nbsp; Baza danych MySQL ";
		return $this->site->getSite() . $fmat;
	}
	public function getPrice() {
		return 800 + $this->site->getPrice();
	}
}
?>