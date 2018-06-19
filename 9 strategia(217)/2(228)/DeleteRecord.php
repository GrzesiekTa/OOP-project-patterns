<?php
//DeleteRecord.php
class DeleteRecord implements IStrategy {
	private $tableMaster;
	private $dataPack;
	private $hookup;
	private $sql;
	public function algorithm(Array $dataPack) {
		$this->tableMaster = IStrategy::TABLENOW;
		$this->hookup = UniversalConnect::doConnect();
		$this->dataPack = $dataPack;
		$destroy = $this->dataPack[0];
		$destroy = intval($destroy);
		$this->sql = "DELETE FROM $this->tableMaster WHERE id='$destroy'";
		//Wyrażenie warunkowe na potrzeby sprawdzenia błędów
		if ($result = $this->hookup->query($this->sql)) {
			echo "Rekord #$destroy został usunięty z tabeli: $this->tableMaster";
		} else {
			echo "Usunięcie nieudane: " . $hookup->error;
		}
	}
}
?>