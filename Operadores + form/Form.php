<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Documento sin título</title>

	<style>
		.resultado {
			color: blueviolet;
			font-weight: bold;
		}
	</style>
</head>

<body>

	<p>&nbsp;</p>
	<form name="form1" method="post" action="">
		<p>
			<label for="num1"></label>
			<input type="text" name="num1" id="num1" />
			<label for="num2"></label>
			<input type="text" name="num2" id="num2" />
			<label for="operacion"></label>

			<select name="operacion" id="operacion">
				<option>Suma</option>
				<option>Resta</option>
				<option>Multiplicacion</option>
				<option>Division</option>
				<option>Modulo</option>
			</select>
		</p>
		<p>
			<input type="submit" name="button" id="button" value="enviar" onClick="prueba" />
		</p>
	</form>
	<p>&nbsp;</p>

	<?php

	include("Funciones.php");

	if (isset($_POST["button"])) {

		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$operador = $_POST["operacion"];

		if (!empty($num1) && !empty($num2)) {

			if (is_numeric($num1) && is_numeric($num2)) {

				$resultado = calcular($operador);
				echo "<p class='resultado'> El resultado es: $resultado </p>";
			} else {
				echo "<p class='resultado'> Solo se pueden ingresar numeros </p>";
			}
		} else {
			echo "<p class='resultado'> Debe ingresar datos para realizar operacion </p>";
		}
	}
	?>
</body>

</html>