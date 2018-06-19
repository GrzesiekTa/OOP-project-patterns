<?php
//DataEntry.php
include_once 'UniversalConnect.php';
class DataEntry {
	private $tableMaster;
	private $hookup;
	private $sql;
	public function __construct() {
		$this->tableMaster = "cms";
		$this->hookup = UniversalConnect::doConnect();
		if ($_POST['dpHeader']) {
			$dpHeader = $this->hookup->real_escape_string($_POST['dpHeader']);
		}

		if ($_POST['textBlock']) {
			$textBlock = $this->hookup->real_escape_string($_POST['textBlock']);
		}

		if ($_POST['imageURL']) {
			$imageURL = $this->hookup->real_escape_string($_POST['imageURL']);
		}

		$this->sql = "INSERT INTO $this->tableMaster
(dpHeader,textBlock,imageURL) VALUES
('$dpHeader','$textBlock','$imageURL')";
		if ($this->hookup->query($this->sql)) {
			printf("Dane zostały wprowadzone do tabeli: $this->tableMaster <br/>");
		} elseif (($result = $this->hookup->query($this->sql)) === false) {
			printf("Błąd w zapytaniu: %s <br/> Całe zapytanie: %s <br/>", $this->hookup -
				 > error, $this->sql);
			exit();
		}
		$this->hookup->close();
	}
}
$worker = new DataEntry();
?>