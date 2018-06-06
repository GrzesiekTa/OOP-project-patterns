<?php
include_once "IFormat.php";
class Desktop implements IFormat {
	private $head = "<!doctype html><html><head>";
	private $headClose = "<meta charset='UTF-8'><title>Komputery osobiste</title></head><body>";
	private $cap = "</body></html>";
	private $sampleText;
	public function formatCSS() {
		echo $this->head;
		echo "<link rel='stylesheet' href='desktop.css'>";
		echo $this->headClose;
		echo "<h1>Witajcie wszyscy!</h1>";
	}
	public function formatGraphics() {
		echo "<img class='pixRight' src='http://grzesiek-tarka.ct8.pl/img/upload/6/titleimg/1000_laravel-5.5.jpg' width='720' height='480'
 alt='river'>";
	}
	public function horizontalLayout() {
		$textFile = "text/lorem.txt";
		$openText = fopen($textFile, 'r');
		$textInfo = fread($openText, filesize($textFile));
		fclose($openText);
		$this->sampleText = $textInfo;
		echo "<div>" . $this->sampleText . "</div>";
		echo "<p/><div>" . $this->sampleText . "</div>";
	}
	public function closeHTML() {
		echo $this->cap;
	}
}

$asd = new Desktop();

?>