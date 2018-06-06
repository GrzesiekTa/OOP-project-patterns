<?php
//FemaleProto.php
include_once 'IPrototype.php';
class FemaleProto extends IPrototype {
	const gender = "SAMICA";
	public $fecundity;
	public function __construct() {
		$this->eyeColor = "czerwony";
		$this->wingBeat = "220";
		$this->unitEyes = "760 ";
	}
	function __clone() {}
}
?>