<?php
//OffState.php
class OffState implements IState {
	private $context;
	public function __construct(Context $contextNow) {
		$this->context = $contextNow;
	}
	public function turnLightOn() {
		echo "Włączyć światła! Nareszcie widzę!<br/>";
		$this->context->setState($this->context->getOnState());
	}
	public function turnLightOff() {
		echo "Światło jest już wyłączone -> nic nie rób<br/>";
	}
}
?>