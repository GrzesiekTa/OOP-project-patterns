<?php
//CloneMe.php
abstract class CloneMe {
	public $name;
	public $picture;
	abstract function __clone();
}

class Person extends CloneMe {
	public function __construct() {
		$this->picture = "cloneMan.png";
		$this->name = "Oryginalny";
	}
	public function display() {
		echo "<img src='$this->picture'>";
		echo "<br/>$this->name <p/>";
	}
	function __clone() {}
}
$worker = new Person();
$worker->display();
$slacker = clone $worker;
$slacker->name = "Sklonowany";
$slacker->display();

// Czym jest wzorzec Prototyp?
// Wzorzec projektowy Prototyp jest interesujący ze względu na wykorzystaną w nim technikę
// klonowania pozwalającą replikować instancje obiektów. Nowe obiekty są tworzone poprzez
// kopiowanie obiektów prototypowych. W tym kontekście instancje odnoszą się do instancji
// klas konkretnych. Celem jest redukcja kosztów tworzenia instancji obiektów dzięki wykorzystaniu
// klonowania. Zamiast tworzyć nową instancję klasy, wykorzystywany jest klon istniejącego
// obiektu. Rysunek 6.1 przedstawia diagram klas dla wzorca Prototyp.
// Zauważ, że klasa Client jest integralną częścią wzorca projektowego Prototyp. Klient poprzez
// interfejs Prototype tworzy instancję konkretnego prototypu zawierającego jakąś metodę
// pozwalającą na klonowanie. Na szczęście PHP zawiera wbudowaną funkcję clone(), która
// może być wykorzystana we wzorcu. Jak zobaczysz, podstawy wzorca są bardzo proste.
// Kiedy wykorzystać wzorzec Prototyp
// Wzorzec ten powinien być wykorzystywany w każdym projekcie, który wymaga wielu instancji
// obiektu prototypowego. Na przykład w badaniach nad ewolucją naukowcy często
// wykorzystują muszki owocówki, które szybko się rozmnażają i dają duże prawdopodobieństwo
// wystąpienia mutacji, fundamentalnego zdarzenia w procesie ewolucji. Typowe badania
// mogą wykorzystać nawet 15 milionów muszek, a ponieważ samice mogą składać jaja prawie
// natychmiast po wykluciu (w ciągu kilku godzin), szansa na znalezienie i zarejestrowanie mutacji
// jest znacznie większa niż u innych stworzeń (np. słoni, u których ciąża trwa aż 22 miesiące).
// 100  Rozdział 6. Wzorzec Prototyp
// Rysunek 6.1. Diagram klas wzorca Prototyp
// Przy zapisywaniu mutacji prototypy samicy i samca stanowią bazę, a mutacje są klonem dowolnej
// ich instancji. Oznacza to, że z dwóch instancji (jedna samica i jeden samiec) możesz
// sklonować tyle mutacji, ile potrzebujesz — bez konieczności powtórnego tworzenia instancji
// klasy konkretnej.
// Wzorzec Prototyp jest także używany do tworzenia struktury organizacyjnej, w której może
// zostać utworzona i obsadzona skończona liczba stanowisk — w zależności od aktualnej
// struktury organizacji. Prototypy były wykorzystywane, gdy za pomocą kompozycji tworzony
// był rysunek, który następnie kopiowano. Ostatni przykład to gra komputerowa, w której
// prototyp wojownika mógłby być sklonowany w celu stworzenia armii.