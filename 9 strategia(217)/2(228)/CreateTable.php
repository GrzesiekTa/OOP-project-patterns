<?php
include_once 'UniversalConnect.php';
class CreateTable {
	private $tableMaster;
	private $hookup;
	public function __construct() {
		$this->tableMaster = "survey";
		$this->hookup = UniversalConnect::doConnect();
		$drop = "DROP TABLE IF EXISTS $this->tableMaster";
		if ($this->hookup->query($drop) === true) {
			printf("Stara tabela %s została usunięta.<br/>", $this->tableMaster);
		}
		$sql = "CREATE TABLE $this->tableMaster (
 id SERIAL,
 company NVARCHAR(40),
 devdes NVARCHAR(12),
 lang NVARCHAR(15),
 plat NVARCHAR(15),
 style NVARCHAR(20),
 device NVARCHAR(12),
 PRIMARY KEY (id))";
		if ($this->hookup->query($sql) === true) {
			printf("Tabela $this->tableMaster została utworzona pomyślnie.<br/>");
		}
		$this->hookup->close();
	}
}
$worker = new CreateTable();
?>