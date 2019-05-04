<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>Exercício 6</title>

</head>

<body>

	6 - Faça um algoritmo em PHP que receba uma string e um caractere de busca e descubra o número de ocorrências deste caractere dentro da string. 
	<br>
	<form method="POST">

		<input type="text" name="palavra">
		<input type="text" name="caracter">
		<input type="submit">

	</form>

	<?php

		if (isset($_POST["palavra"]) && isset($_POST["caracter"])) {
			
			$palavra = $_POST["palavra"];
			$caracter = $_POST["caracter"];

			$tamanhoPalavra = strlen($palavra);
			$contaOcorrencia = 0;

			for ($i=0; $i < $tamanhoPalavra; $i++) { 

				if ($palavra[$i] == $caracter) {
					$contaOcorrencia++;
				}

			}

			echo "Número de ocorrencias do caracter ".$caracter.": ".$contaOcorrencia;

		}

	?>
	
</body>

</html>