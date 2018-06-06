<?php
interface IPrototype {
	const PROTO = "IPrototype";
	function __clone();
}
class DynamicObjectNaming implements IPrototype {
	const CONCRETE = " [Konkretna] DynamicObjectNaming";

	public function __construct() {
		echo "To zostało stworzone dynamicznie.<br/>";
	}
	public function doWork() {
		echo "<br/>To jest przydzielone zadanie.<br/>";
	}
	function __clone() {}
}
$employeeData = array('DynamicObjectNaming', 'Teresa', 'mar', 'Jan', 'eng',
	'Oliwia', 'man');
$don = $employeeData[0];
$employeeData[6] = new $don;
echo $employeeData[6]::CONCRETE;
$employeeData[6]->doWork();
$employeeName = $employeeData[5];
$employeeName = clone $employeeData[6];
echo $employeeName->doWork();
echo "To jest klon klasy " . $employeeName::CONCRETE . "<br/>";
echo "Potomek: " . $employeeName::PROTO;
?>