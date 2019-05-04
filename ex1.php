<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>Exercise 1</title>

</head>

<body>
	
	1 – Crie um programa que exiba quantos caracteres possui o a palavra digitada pelo usuário.
	<br>
	<form method="POST">

		<input type="text" name="palavra">
		<input type="submit" name="value">

	</form>

	<?php

		if (isset($_POST["palavra"])) {

			$palavra = $_POST["palavra"];
			echo "<br/>Quantidade de letras contidas em ".$palavra.": ".strlen($palavra);

		}

	?>

</body>

</html>