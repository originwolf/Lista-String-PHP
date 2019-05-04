<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	3 – Crie um programa em que usuário digite seu CEP. Capture apenas os 3 últimos números e exiba-o.
	<br>
	<form method="POST">
		<input type="text" name="cep">
		<input type="submit">
	</form>

	<?php

		$valor = $_POST["cep"];
		echo "Ultimos 3 digitos: ".substr($valor, 5);

	?>

</body>
</html>