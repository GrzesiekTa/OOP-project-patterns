<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="devedate.css">
	<title>Usługi randkowe dla programistów</title>
</head>
<body>
	<article>
		<header>&nbsp;&nbsp;DevDate</header>
		<h2>&nbsp;Usługi randkowe dla <br/>
		&nbsp;Programistów</h2>
		<h3>&nbsp;Szukam:</h3>
		<form action="ClientH.php" method="post">
			<div id="sex">
				<div id="fem"> <img src="pix/grrrl.png" width="95" height="128" alt="grrl"><br/>
					<input type="radio" name="gender" value="Female">
					<br/>
				&nbsp;Laska </div>
				<aside> <img src="pix/dude.png" width="99" height="133" alt="dude"><br/>
					<input type="radio" name="gender" value="Male">
					<br/>
					&nbsp;Koleś!
					<p/>
				</aside>
			</div>
			<strong>Wiek<br/>
			</strong>
			<input type="radio" name="age" value="Grupa wiekowa 1">
			&nbsp;18-29: Grupa 1 <br/>
			<input type="radio" name="age" value="Grupa wiekowa 2">
			&nbsp;30-39: Grupa 2<br/>
			<input type="radio" name="age" value="Grupa wiekowa 3">
			&nbsp;40-49: Grupa 3<br/>
			<input type="radio" name="age" value="Grupa wiekowa 4">
			&nbsp;50+: Grupa 4
			<p/>
			<strong>Ulubiony język programowania<br/>
			</strong>
			<input type="radio" name="progLang" value="php">
			&nbsp;PHP<br/>
			<input type="radio" name="progLang" value="cs">
			&nbsp;C#<br/>
			<input type="radio" name="progLang" value="js">
			&nbsp;JavaScript<br/>
			<input type="radio" name="progLang" value="as3">
			&nbsp;ActionScript 3.0
			<p/>
			<strong>Najczęciej używany sprzęt<br/>
			</strong>
			<input type="radio" name="hardware" value="mac">
			&nbsp;Macintosh<br/>
			<input type="radio" name="hardware" value="dell">
			&nbsp;Dell<br/>
			<input type="radio" name="hardware" value="hp">
			&nbsp;Hewlett-Packard<br/>
			<input type="radio" name="hardware" value="lin">
			&nbsp;Komputer z Linuxem
			<p/>


			<strong>Ulubione jedzenie<br/>
			</strong>
			<input type="radio" name="food" value="piz">
			&nbsp;Pizza<br/>
			<input type="radio" name="food" value="burg">
			&nbsp;Hamburgery<br/>
			<input type="radio" name="food" value="nach">
			&nbsp;Nachosy<br/>
			<input type="radio" name="food" value="veg">
			&nbsp;Warzywa
			<p/>


			<strong>Ulubiny film<br/>
			</strong>
			<input type="radio" name="film" value="kom">
			&nbsp;komedia<br/>
			<input type="radio" name="film" value="hor">
			&nbsp;horror<br/>
			<input type="radio" name="film" value="rom">
			&nbsp;romans<br/>
			<input type="radio" name="film" value="his">
			&nbsp;historyczny
			<p/>




			<input type="submit" name="search" value="Znajdź Prawdziwą Miłość">
		</form>
	</article>
</body>
</html>