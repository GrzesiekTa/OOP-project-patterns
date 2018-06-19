<?php
//OnState.php
class OnState implements IState {
	private $context;
	public function __construct(Context $contextNow) {
		$this->context = $contextNow;
	}
	public function turnLightOn() {
		echo "Światło jest już włączone -> nic nie rób<br/>";
	}
	public function turnLightOff() {
		echo "Wyłączyć światła!<br/>";
		$this->context->setState($this->context->getOffState());
	}
}
?>