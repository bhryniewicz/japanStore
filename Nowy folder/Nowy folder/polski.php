<html>
<head>
	<title>Szkoła ponadgimnazjalna</title>
	<meta charset="utf-8">
	<link href="styl.css" rel="stylesheet">
</head>
<body>
	<header>
		<h1>Oceny uczniów:język polski</h1>
	</header>
	<div class="wrapper">
		<div class="left">
			<h2>Lista uczniów</h2>
		</div>
		<div class="right">
			<?php
			
			$conncetion = mysqli_connect('localhost','root','','szkole');
			
			$wynik1 = mysqli_query($conncetion,'select imie,nazwisko from uczen where id=2');
			
			if(mysqli_num_rows($wynik1)>0) {
				while($tablica = mysqli_fetch_array($wynik1)) {
					echo "<h2>".$tablica[]."</h2>";
				}
			}
			
			mysqli_close($conncetion);
			?>
			</h2>
		</div>
	</div>
	<footer>
		<h3>Zespół szkół ponadgimnazjalnych</h3>
		<p>Strone opracował: Bartosz Hryniewicz</p>
	</footer>

</body>
</html>