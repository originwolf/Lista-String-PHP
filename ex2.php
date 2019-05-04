<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	2 – Crie um programa em que em uma palavra digitada pelo usuário sejam substituídas todas as vogais por X.
	<br>
	<form method="POST">
		<input type="text" name="vogal">
		<input type="submit" name="value">
	</form>
	
	<?php

		$vogal = $_POST["vogal"];
		$tam = strlen($vogal);
		for ($i=0; $i < $tam; $i++) { 
			if ($vogal[$i] == "a" || $vogal[$i] == "e" || $vogal[$i] == "i" || $vogal[$i] == "o" || $vogal[$i] == "u" ||
				$vogal[$i] == "A" || $vogal[$i] == "E" || $vogal[$i] == "I" || $vogal[$i] == "O" || $vogal[$i] == "U") {
				$vogal[$i] = "x";
			}
		}
		echo "<br/> String sem vogais: ".$vogal;

	?>

</body>
</html>