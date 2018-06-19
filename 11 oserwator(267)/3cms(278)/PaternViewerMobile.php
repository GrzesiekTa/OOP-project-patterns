<!DOCTYPE html>
<html>
<head>
	<title>Przegląd dla urządzeń mobilnych</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head>
<body>
	<div data-role="page">
		<div data-role="header">
			<h1>Wzorce projektowe</h1>
		</div>
		<form action="SniffClient.php" method="post">
			<fieldset data-role="controlgroup">
				<legend>&nbsp;Wybierz wzorzec:</legend>
				<input type="radio" name="dp" id="tm" value="Metoda Szablonowa" />
				<label for="tm">Metoda Szablonowa</label>
				<input type="radio" name="dp" id="bld" value="Budowniczy" />
				<label for="bld">Budowniczy</label>
				<input type="radio" name="dp" id="fm" value="Metoda Fabrykująca" />
				<label for="fm">Metoda Fabrykująca</label>
			</fieldset>
			<input type="submit" data-theme="e" value="Zobacz wzorzec">
		</form>
		<div data-role="footer">&nbsp;Wzorce PHP</div>
	</div>
</body>