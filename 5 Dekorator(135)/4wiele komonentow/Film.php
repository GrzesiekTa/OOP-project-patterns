<?php
//Food.php
//konkretny dekorator
class Film extends Decorator {
	private $chowNow;
	public function __construct(IComponent $dateNow) {
		$this->date = $dateNow;
		$this->getDate();
	}
	private $snacks = array("kom" => "komedia",
		"hor" => "horror",
		"rom" => "romans",
		"his" => "historyczny");
	public function setFeature($yum) {
		$this->chowNow = $this->snacks[$yum];
	}
	public function getFeature() {
		$output = $this->date->getFeature();
		$fmat = "<br/>&nbsp;&nbsp;";
		$output .= "$fmat Ulubiony film: ";
		$output .= $this->chowNow;
		return $output;
	}
}
?>