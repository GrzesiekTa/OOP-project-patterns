<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="desktop.css">
	<title>Przegląd wzorców projektowych</title>
</head>
<body>
	<h1>Wybierz wzorzec</h1>
	<h2>Dostępne wzorce</h2>
	<form action="SniffClient.php" method="post">
		<input type="radio" name="dp" id="tm" value="Metoda Szablonowa" />
		<label for="tm">Metoda Szablonowa</label>
		<br/>
		<input type="radio" name="dp" id="bld" value="Budowniczy" />
		<label for="bld">Budowniczy</label>
		<br/>
		<input type="radio" name="dp" id="fm" value="Metoda Fabrykująca" />
		<label for="fm">Metoda Fabrykująca</label>
		<p/>
		<input type="submit" value="Zobacz wzorzec">
	</form>
</body>
</html>