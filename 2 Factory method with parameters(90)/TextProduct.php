<?php
//TextProduct.php
include_once('FormatHelper.php');
include_once('Product.php');
class MoldovaProduct implements Product
{
	private $mfgProduct;
	private $formatHelper;
	private $countryNow;
	public function getProperties()
	{
//Ładuje tekst z pliku zewnętrznego
		$this->countryNow=file_get_contents("Moldova.txt");
		$this->formatHelper=new FormatHelper();
		$this->mfgProduct=$this->formatHelper->addTop();
		$this->mfgProduct.="<img src='http://grzesiek-tarka.ct8.pl/img/upload/6/titleimg/laravel-5.5.jpg' class='pixRight' width='208'
		height='450'>";
		$this->mfgProduct .="<header>Mołdawia</header>";
		$this->mfgProduct .="<p>$this->countryNow</p>";
		$this->mfgProduct .=$this->formatHelper->closeUp();
		return $this->mfgProduct;
	}
}


$asdasd=new MoldovaProduct;

echo $asdasd->getProperties();