<?php
//Engineering.php
include_once 'IAcmePrototype.php';
class Engineering extends IAcmePrototype {
	const UNIT = "Inżynieria";
	private $development = "programowanie";
	private $design = "grafika komputerowa";
	private $sysAd = "administracja systemami";
	public function setDept($orgCode) {
		switch ($orgCode) {
		case 301:
			$this->dept = $this->development;
			break;
		case 302:
			$this->dept = $this->design;
			break;
		case 303:
			$this->dept = $this->sysAd;
			break;
		default:
			$this->dept = "Nierozpoznany kod";
		}

	}
	public function getDept() {
		return $this->dept;
	}
	function __clone() {}
}
?>