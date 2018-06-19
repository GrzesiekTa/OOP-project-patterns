<!doctype html>
<!-- Admin.html -->
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="desktop.css">
	<title>CMS - Moduł administracyjny</title>
</head>
<body>
	<h1>CMS - Moduł administracyjny</h1>
	<h2>Wprowadzanie danych</h2>
	<form action="DataEntry.php" method="post">
		<input type="text" name="dpHeader">
		&nbsp;Nazwa wzorca projektowego<br />
		Opis wzorca projektowego:<br />
		<textarea name="textBlock" cols="48" rows="16"></textarea>
		<p />
		<input type="text" name="imageURL">
		&nbsp;Adres URL grafiki
		<p />
		<input type="submit" name="entry" value="Wprowadź dane">
	</form>
	<h2>Data Update</h2>
	<form action="DataUpdate.php" method="post">
		<input type="text" name="dpUpdate">
		&nbsp;Nazwa aktualizowanego wzorca projektowego<br />
		Nowy opis wzorca projektowego:<br />
		<textarea name="newData" cols="48" rows="16"></textarea>
		<p />
		<input type="submit" name="update" value="Zapisz dane">
	</form>
</body>
</html>