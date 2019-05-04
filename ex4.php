<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	4 – Exiba a palavra digitada pelo usuário de maneira inversa.
	<br>
	<form method="POST">
		<input type="text" name="valor">
		<input type="submit">
	</form>

	<?php

		$valor = $_POST["valor"];
		$tam = strlen($valor);
		echo "Palavra invertida: ";
		for ($i = $tam - 1; $i >= 0; $i--) { 
			echo $valor[$i];
		}

	?>

</body>
</html>