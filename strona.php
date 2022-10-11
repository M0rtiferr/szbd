<!doctype html>
<html lang="pl">
  <head>
  <meta charset="UTF-8">
  </head>
  <body>
  <h1 style="text-align: center;"> Bazy danych w php </h1>
	<form method="post">
	<input type="submit" value="Utwórz baze danych" name="p1">
	</form>
	<?php
	$p=mysqli_connect('localhost','root','');
	if(isset($_POST['p1'])){
		$sql="create database szkola;";
		if(mysqli_query($p,$sql)) 
		echo "Baza została utworzona"; 
		else echo "Błąd tworzenia bazy";
	}
?>
<form method="post">
	<input type="submit" value="dodaj dane" name="sql2">
<?php

	$p=mysqli_connect('localhost','root','');

	$sql2 = "CREATE TABLE sprzet (
				id INT(110) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				projektor VARCHAR(20) NOT NULL
				monitor INT(15) NOT NULL,
				myszka VARCHAR(30) NOT NULL,
				reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
				
		mysqli_close($p);
	
	?>
  </body>
</html>