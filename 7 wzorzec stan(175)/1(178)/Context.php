<?php
//Context.php
class Context {
	private $offState;
	private $onState;
	private $currentState;
	public function __construct() {
		$this->offState = new OffState($this);
		$this->onState = new OnState($this);
		//Stan początkowy to światło wyłączone
		$this->currentState = $this->offState;
	}
	//Metody-wyzwalacze
	public function turnOnLight() {
		$this->currentState->turnLightOn();
	}
	public function turnOffLight() {
		$this->currentState->turnLightOff();

	}
	//Ustawienie aktualnego stanu
	public function setState(IState $state) {
		$this->currentState = $state;
	}
	//Pobranie stanów
	public function getOnState() {
		return $this->onState;
	}
	public function getOffState() {
		return $this->offState;
	}
}
?>