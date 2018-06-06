<?php
//Client.php
function __autoload($class_name) {
	include $class_name . '.php';
}
class Client {
	//Instancje bezpośrednie
	private $fly1;
	private $fly2;
	//Instancje klonowane
	private $c1Fly;
	private $c2Fly;
	private $updatedCloneFly;
	public function __construct() {
		//Tworzenie instancji
		$this->fly1 = new MaleProto();
		$this->fly2 = new FemaleProto();
		//Klonowanie
		$this->c1Fly = clone $this->fly1;
		$this->c2Fly = clone $this->fly2;
		$this->updatedCloneFly = clone $this->fly2;
		//Aktualizacja klonów
		$this->c1Fly->mated = "true";
		$this->c2Fly->fecundity = "186";
		$this->updatedCloneFly->eyeColor = "fioletowy";
		$this->updatedCloneFly->wingBeat = "220";
		$this->updatedCloneFly->unitEyes = "750";
		$this->updatedCloneFly->fecundity = "92";
		//Przesłanie z wykorzystaniem podpowiadania typów
		$this->showFly($this->c1Fly);
		$this->showFly($this->c2Fly);
		$this->showFly($this->updatedCloneFly);
	}
	private function showFly(IPrototype $fly) {
		echo "Kolor oczu: " . $fly->eyeColor . "<br/>";
		echo "Uderzenia skrzydeł na sekundę: " . $fly->wingBeat . "<br/>";
		echo "Jednostki oczu: " . $fly->unitEyes . "<br/>";

		$genderNow = $fly::gender;
		echo "Płeć: " . $genderNow . "<br/>";
		if ($genderNow == "SAMICA") {
			echo "Liczba jaj: " . $fly->fecundity . "<p/>";
		} else {
			echo "Posiada parę: " . $fly->mated . "<p/>";
		}
	}
}
$worker = new Client();
?>