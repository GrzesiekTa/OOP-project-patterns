<?php
include_once 'IMobileFormat.php';
class Mobile implements IMobileFormat {
	private $head = "<!doctype html><html><head>";
	private $headClose = "<meta charset='UTF-8'><title>Urządzenia mobilne</title></head><body>";
	private $cap = "</body></html>";
	private $sampleText;
	public function formatCSS() {
		echo $this->head;
		echo "<link rel='stylesheet' href='mobile.css'>";
		echo $this->headClose;
		echo "<h1>Witajcie wszyscy!</h1>";
	}
	public function formatGraphics() {
		echo "<img src='http://grzesiek-tarka.ct8.pl/img/upload/6/titleimg/1000_laravel-5.5.jpg' width=device-width height=device-height
 alt='river'>";
	}
	public function verticalLayout() {
		$textFile = "text/lorem.txt";
		$openText = fopen($textFile, 'r');
		$textInfo = fread($openText, filesize($textFile));
		fclose($openText);
		$this->sampleText = $textInfo;
		echo "<p/><div>" . $this->sampleText . "</div>";
		echo "<p/><div>" . $this->sampleText . "</div>";
	}
	public function closeHTML() {
		echo $this->cap;
	}
}
?>