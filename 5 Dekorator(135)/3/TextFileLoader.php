<?php
class TextFileLoader {
	private $textNow;
	public function __construct() {
		$this->textNow = file_get_contents("seler.txt");
		echo $this->textNow;
	}
}
$worker = new TextFileLoader();
?>