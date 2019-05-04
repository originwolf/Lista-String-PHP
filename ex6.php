<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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

		$palavra = $_POST["palavra"];
		$caracter = $_POST["caracter"];

		$tamanho = strlen($palavra);
		$contaOcorrencia = 0;

		for ($i=0; $i < $tamanho; $i++) { 
			if ($palavra[$i] == $caracter) {
				$contaOcorrencia++;
			}
		}

		echo "Número de ocorrencias do caracter ".$caracter.": ".$contaOcorrencia;

	?>
	
</body>
</html>