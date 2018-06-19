<?php
class FormatHelper {
	private $topper;
	private $bottom;
	private $link;
	public function addTop() {
		$this->topper = "<!doctype html><html><head>
<link rel='stylesheet' type='text/css' href='products.css'/>
<meta charset='UTF-8'>
<title>Fabryka map</title>
</head>
<body>";
		return $this->topper;
	}
	public function closeUp() {
		$this->bottom = "<br/><a href='Answer.html' target='_blank'>Wypełnij formularz</a>";
		$this->bottom .= "</body></html>";
		return $this->bottom;
	}
}
?>