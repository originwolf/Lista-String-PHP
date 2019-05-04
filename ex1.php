<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	1 – Crie um programa que exiba quantos caracteres possui o a palavra digitada pelo usuário.
	<br>
	<form method="POST">
		<input type="text" name="comp">
		<input type="submit" name="value">
	</form>

	<?php

		$comp = $_POST["comp"];
		echo "<br/>Quantidade de letras contidas em ".$comp.": ".strlen($comp);

	?>

</body>
</html>