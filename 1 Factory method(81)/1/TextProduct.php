<?php
//TextProduct.php
include_once('Product.php');
class TextProduct implements Product
{
	private $mfgProduct;
	public function getProperties()
	{
		$this->mfgProduct ='
		<!doctype html>
		<html><head>
		<style type="text/css">
		header {
			color: #900;
			font-weight: bold;
			font-size: 24px;
			font-family: Verdana, Geneva, sans-serif;
		}
		p {
			font-family: Verdana, Geneva, sans-serif;
			font-size: 12px;
		}
		</style>
		<meta charset="UTF-8"><title>Mali</title></head>
		<body>
		<header>Mali</header>
		<p>W 1960 roku Republika Sudanu Francuskiego i Senegal zyskały z rąk Francji
		niepodległość i przyjęły wspólną nazwę Federacji Mali. Kiedy po zaledwie kilku
		miesiącach Senegal wystąpił z federacji, Republika Sudanu Francuskiego pozostała
		przy nazwie Mali. Rządy dyktatorskie zakończyły się w roku 1991 po militarnym
		zamachu stanu, który zaowocował okresem rządów demokratycznych. Pierwsze i drugie
		demokratyczne wybory prezydenckie w roku 1992 i 1997 wygrał Alpha KONARE. Ponieważ,
		zgodnie z konstytucją Mali, prezydent może sprawować urząd przez dwie kadencje,
		w roku 2001 Konare zakończył prezydenturę, a jego miejsce zajął Amadou TOURE, który
		został wybrany na drugą kadencję w wyborach roku 2007, powszechnie uważanych
		za wolne i uczciwe.
		W marcu 2012 r. władzę przejęła junta wojskowa, uważająca, że armia Mali nie ma
		wystarczającego wsparcia rządu w walce z kierowanymi przez Tuaregów rebeliantami
		z północy. Nacisk międzynarodowy zmusił przywódców puczu do przyśpieszenia powrotu
		do demokracji i 12 kwietnia 2012 r. prezydentem został Dioncounda TRAORE. </p>
		</body></html>';

		return $this->mfgProduct;
	}
}
?>