<?php
//MaleProto.php
include_once 'IPrototype.php';
class MaleProto extends IPrototype {
	const gender = "SAMIEC";
	public $mated;
	public function __construct() {
		$this->eyeColor = "czerwony";
		$this->wingBeat = "220";
		$this->unitEyes = "760 ";
	}
	function __clone() {}
}
?>