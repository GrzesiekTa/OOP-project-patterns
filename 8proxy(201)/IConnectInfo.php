<?php
//Nazwa pliku: IConnectInfo.php
interface IConnectInfo {
	const HOST = "localhost";
	const UNAME = "root";
	const PW = "root";
	const DBNAME = "ksiegarnia";
	public function doConnect();
}
?>