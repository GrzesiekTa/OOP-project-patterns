<?php
//KyrgyzstanProduct.php
include_once 'FormatHelper.php';
include_once 'Product.php';
class KyrgyzstanProduct implements Product {
	private $mfgProduct;
	private $formatHelper;
	public function getProperties() {
		$this->formatHelper = new FormatHelper();
		$this->mfgProduct = $this->formatHelper->addTop();
		$this->mfgProduct .= "
		<img src='Countries/Kyrgyzstan.png' class='pixRight' width='600' height='304'>
		<header>Kirgistan</header>
		<p>Malowniczy kraj w centralnej Azji hołdujący tradycji nomadów. Znaczna jego
		część została w 1876 roku zaanektowana przez Rosję. W 1916 roku Kirgizi
		wzniecili przeciwko imperium rosyjskiemu powstanie, w którym zginęła prawie
		jedna szósta populacji Kirgistanu. Kirgistan stał się republiką sowiecką w roku
		1936, a ogłosił niepodległość w roku 1991, po rozpadzie Związku Radzieckiego.
		Demonstracje, które przetoczyły się przez cały kraj wiosną 2005 r., zaowocowały
		obaleniem rządzącego od początków niepodległości prezydenta Askara AKAJEWA.
		W wyborach prezydenckich w czerwcu 2005 r. ze znaczną przewagą głosów zwyciężył
		były premier, Kurmanbek BAKIJEW. Przez kolejne kilka lat nowy prezydent
		manipulował parlamentem w celu wzmocnienia swojej władzy. W czerwcu 2009 r.,
		po miesiącach represji wobec swoich przeciwników politycznych i krytycznych
		mediów, Bakijew wygrał w kolejnych wyborach prezydenckich, uznanych przez
		środowisko międzynarodowe za nieuczciwe. W kwietniu 2010 r. ogólnokrajowe
		protesty spowodowały usunięcie Bakijewa z urzędu i wygnanie go z kraju. Jego
		następczyni, Roza OTUNBAJEWA, piastowała to stanowisko przejściowo, do czasu
		inauguracji prezydentury Almazbeka ATAMBAJEWA w grudniu 2011 r. Problemy kraju
		to: tempo demokratyzacji, korupcja, konflikty na tle etnicznym oraz terroryzm.</p>";

		$this->mfgProduct .= $this->formatHelper->closeUp();

		return $this->mfgProduct;
	}
}
?>