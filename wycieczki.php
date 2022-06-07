<!doctype HTML>
<html>
<head>
<meta charset='utf-8'>
<title>Wycieczki i urlopy </title>
<link rel="stylesheet" type="text/css" href="styl3.css">
</head>
<script>
</script>
<body>
<div id="banner"> 
	<h1>BIURO PODRÓŻY</h1>
</div>

<div id="left">
	<h2>KONTAKT</h2>
	<a href="biuro@wycieczki.pl">napisz do nas</a>
	<p>telefon 555666777</p>
</div>
<div id="middle">
	<h2>GALERIA</h2>
	<?php
	$zmienna = mysqli_connect("localhost", "root", "", "egzamin3");
	$a = mysqli_query($zmienna,"SELECT nazwaPliku, podpis from zdjecia order by podpis");
	
	foreach($a as $b){
		echo "<img src='".$b['nazwaPliku']."'alt='".$b['podpis']."'>";
	}
	
	mysqli_close($zmienna);
	?>
</div>

<div id="right">
	<h2>PROMOCJE</h2>
	<table>
		<tr>
			<td>Jesień </td>
			<td>Grupa 4+ </td>
			<td>Grupa 10+ </td>
		</tr>
		<tr>
			<td>5%</td>
			<td>10%</td>
			<td>15%</td>
		</td>
	</table>
</div>

<div id="data">
	<h2>LISTA WYCIECZEK</h2>
</div>
<footer>
	<p>Stronę wykonał eb</p>
</footer>

</body>
</html>