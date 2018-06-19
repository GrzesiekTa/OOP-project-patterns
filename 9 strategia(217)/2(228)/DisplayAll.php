<?php
//DisplayAll.php
class DisplayAll implements IStrategy {
	private $tableMaster;
	private $hookup;
	public function algorithm(Array $dataPack) {
		$this->tableMaster = IStrategy::TABLENOW;
		$this->hookup = UniversalConnect::doConnect();
		//Stworzenie zapytania SQL
		$sql = "SELECT * FROM $this->tableMaster";
		//Wyrażenie warunkowe dla zapytania MySQL
		if ($result = $this->hookup->query($sql)) {
			printf("Zwrócono %d wierszy.<p />", $result->num_rows);
			echo "<link rel='stylesheet' href='survey.css'>";
			echo "<table>";
			while ($finfo = mysqli_fetch_field($result)) {
				echo "<th>&nbsp;{$finfo->name}</th>";
			}
			echo "</tr>\n";
			while ($row = mysqli_fetch_row($result)) {
				echo "<tr >";
				foreach ($row as $cell) {
					echo "<td >$cell</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
			$result->close();
		}
		$this->hookup->close();
	}
}
?>