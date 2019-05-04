<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>Exercício 7</title>

</head>

<body>

	7 – Faça um algoritmo que coloque cada primeira letra de cada palavra em maiúscula.
	<br>
	<form method="POST">
		<input type="text" name="frase">
		<input type="submit">
	</form>

	<?php

		$frase = $_POST["frase"];

		echo ucwords($frase);

	?>
	
</body>

</html>