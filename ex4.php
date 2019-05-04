<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>Exercício 4</title>

</head>

<body>
	
	4 – Exiba a palavra digitada pelo usuário de maneira inversa.
	<br>
	<form method="POST">

		<input type="text" name="palavra">
		<input type="submit">

	</form>

	<?php

		if (isset($_POST["palavra"])) {

			$palavra = $_POST["palavra"];

			$tamanhoPalavra = strlen($palavra);

			echo "Palavra invertida: ";

			for ($i = $tamanhoPalavra - 1; $i >= 0; $i--) { 
				echo $palavra[$i];
			}

		}

	?>

</body>

</html>