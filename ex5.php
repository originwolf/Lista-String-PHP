<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>Exercício 5</title>

</head>

<body>
	
	5 – Faça um algoritmo PHP que receba duas strings, e descubra se elas são iguais ou diferentes, imprimindo “IGUAL” ou “DIFERENTE” respectivamente.
	<br>
	<form method="POST">

		<input type="text" name="frase1">
		<input type="text" name="frase2">
		<input type="submit">

	</form>

	<?php

		if (isset($_POST["frase1"]) && isset($_POST["frase2"])) {

			$frase1 = $_POST["frase1"];
			$frase2 = $_POST["frase2"];

			$numeroIgualdades = 0;

			$tamanhoFrase1 = strlen($frase1);
			$tamanhoFrase2 = strlen($frase2);

			if ($tamanhoFrase1 == $tamanhoFrase2) {

			 	for ($i=0; $i < $tamanhoFrase1; $i++) { 

			 		if ($frase1[$i] == $frase2[$i]) {

			 			$numeroIgualdades++;

			 		}

			 	}

			} else {

				echo "Palavras inseridas: ".$frase1." e ".$frase2;
				echo "<br/>Strings diferentes";

			} 

			if ($numeroIgualdades == $tamanhoFrase1) {

				echo "Palavras inseridas: ".$frase1." e ".$frase2;
				echo "<br/>Strings iguais";

			} elseif ($numeroIgualdades != $tamanhoFrase1) {

				echo "Palavras inseridas: ".$frase1." e ".$frase2;
				echo "<br/>Strings diferentes";
				
			}
		}

	?>

</body>
</html>