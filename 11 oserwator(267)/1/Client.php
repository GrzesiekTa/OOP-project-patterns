<?php
//Client
function __autoload($class_name) {
	include $class_name . '.php';
}
//
class Client {
	public function __construct() {
		echo "<p>Tworzenie trzech konkretnych obserwatorów i konkretnego podmiotu:</p>";
		$ob1 = new ConcreteObserver();
		$ob2 = new ConcreteObserver();
		$ob3 = new ConcreteObserver();
		$subject = new ConcreteSubject();
		$subject->setObservers();
		$subject->setData("Oto twoje dane!");
		$subject->attach($ob1);
		$subject->attach($ob2);
		$subject->attach($ob3);
		$subject->notify();
		echo "<p>Odpięcie obserwatora ob3. Powiadamiane będą obserwatory ob1 i ob2:</p>";
		$subject->detach($ob3);
		$subject->notify();
		echo "<p>Reset danych, powtórne podpięcie obserwatora ob3 i dopięcie obserwatora ob2 - tylko ob1 i ob3 będą powiadamiane:</p>";
		$subject->setData("Dane, potrzebne w obiektach ob1 i ob3.");
		$subject->attach($ob3);
		$subject->detach($ob2);
		$subject->notify();
	}
}
$worker = new Client();
?>