<?php
//Cell9State.php
class Cell9State implements IMatrix {
	private $context;
	public function __construct(Context $contextNow) {
		$this->context = $contextNow;
	}
	public function goLeft() {
		echo "<img src='cells/eight.png'>";
		$this->context->setState($this->context->getCell8State());
	}
	public function goRight() {
		//Nieprawidłowy ruch
	}
	public function goUp() {
		echo "<img src='cells/six.png'>";
		$this->context->setState($this->context->getCell6State());
	}
	public function goDown() {
		//Nieprawidłowy ruch
	}
}
?>