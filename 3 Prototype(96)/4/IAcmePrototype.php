<?php
//IAcmePrototype.php
abstract class IAcmePrototype {
	protected $name;
	protected $id;
	protected $employeePic;
	protected $dept;
	//Dział
	abstract function setDept($orgCode);
	abstract function getDept();
	//Nazwisko
	public function setName($emName) {
		$this->name = $emName;
	}
	public function getName() {
		return $this->name;
	}
	//Identyfikator
	public function setId($emId) {
		$this->id = $emId;
	}
	public function getId() {
		return $this->id;
	}
	//Zdjęcie pracownika
	public function setPic($ePic) {
		$this->employeePic = $ePic;
	}
	public function getPic() {
		return $this->employeePic;
	}
	abstract function __clone();
}
?>