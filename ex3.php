<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>Exercício 3</title>

</head>

<body>
	
	3 – Crie um programa em que usuário digite seu CEP. Capture apenas os 3 últimos números e exiba-o.
	<br>
	Digite apenas números
	<br>
	<form method="POST">

		<input type="number" name="cep">
		<input type="submit">

	</form>

	<?php

		if (isset($_POST["cep"])) {

			$cep = $_POST["cep"];
			echo "Ultimos 3 digitos: ".substr($cep, 5);

		}

	?>

</body>
</html>