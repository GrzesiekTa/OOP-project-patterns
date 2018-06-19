<?php
//Mp3.php
//konkretny dekorator
class Mp3 extends Decorator {
	public function __construct(IComponent $siteNow) {
		$this->site = $siteNow;
	}
	public function getSite() {
		$fmat = "<br/>&nbsp;&nbsp; Mp3 ";
		return $this->site->getSite() . $fmat;
	}
	public function getPrice() {
		return 1000 + $this->site->getPrice();
	}
}
?>