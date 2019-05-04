<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	5 – Faça um algoritmo PHP que receba duas strings, e descubra se elas são iguais ou diferentes, imprimindo “IGUAL” ou “DIFERENTE” respectivamente.
	<br>
	<form method="POST">
		<input type="text" name="string1">
		<input type="text" name="string2">
		<input type="submit">
	</form>

	<?php

		$valor1 = $_POST["string1"];
		$valor2 = $_POST["string2"];
		$soma = 0;

		$tam1 = strlen($valor1);
		$tam2 = strlen($valor2);

		if ($tam1 == $tam2) {

		 	for ($i=0; $i < $tam1; $i++) { 

		 		if ($valor1[$i] == $valor2[$i]) {

		 			$soma++;

		 		}

		 	}

		} else {

			echo "Palavras inseridas: ".$valor1." e ".$valor2;
			echo "<br/>Strings diferentes";

		} 

		if ($soma == $tam1) {
			echo "Palavras inseridas: ".$valor1." e ".$valor2;
			echo "<br/>Strings iguais";
		}

	?>

</body>
</html>