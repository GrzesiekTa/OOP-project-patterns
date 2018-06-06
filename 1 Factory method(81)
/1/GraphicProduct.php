<?php
//GraphicProduct.php
include_once('Product.php');
class GraphicProduct implements Product
{
	private $mfgProduct;
	public function getProperties()
	{
		$this->mfgProduct="<!doctype html><html><head><meta charset='UTF-8' />";
		$this->mfgProduct.="<title>Fabryka map</title>";
		$this->mfgProduct.="</head><body>";
		$this->mfgProduct.="<img src='http://grzesiek-tarka.ct8.pl/img/upload/6/titleimg/laravel-5.5.jpg' width='500' height='500' />";
		$this->mfgProduct.="</body></html>";
		return $this->mfgProduct;
	}
}
?>