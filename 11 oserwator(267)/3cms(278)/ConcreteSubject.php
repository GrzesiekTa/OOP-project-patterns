<?php
//ConcreteSubject.php
class ConcreteSubject extends Subject {
	private $hookup;
	private $tableMaster;
	private $designPattern;
	private $stateSet = array();
	public function setState($dpNow) {
		$this->designPattern = strtolower($dpNow);
		$this->tableMaster = "cms";
		$this->hookup = UniversalConnect::doConnect();
//Stworzenie zapytania SQL
		$sql = "SELECT * FROM $this->tableMaster WHERE dpheader='$this->designPattern'";
//Dodanie danych z tabeli MySQL do tablicy $stateSet
		if ($result = $this->hookup->query($sql)) {
			while ($row = $result->fetch_assoc()) {
				$this->stateSet[0] = $row["dpHeader"];
				$this->stateSet[1] = $row["textBlock"];
				$this->stateSet[2] = $row["imageURL"];
			}
			$result->close();
		}
		$this->hookup->close();
//Metoda update() jest częścią metody notify()
		//zaimplementowaną w klasie Subject jako metoda konkretna.
		$this->notify();
	}
	public function getState() {
		return $this->stateSet;
	}
}
?>