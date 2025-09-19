<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resultado formulario</title>
</head>
<body>
	<h1>Resultado de Operaciones: </h1>
	<?php
		$num1 = $_REQUEST["num1"];
		$num2 = $_REQUEST["num2"];

		$suma = $num1 + $num2;
		$resta = $num1 - $num2;
		$multi = $num1 * $num2;
		$pow = pow($num1, $num2);
		if($num2 != 0){
			$div = $num1 / $num2;
			$mod = $num1 % $num2;
		}

		// V1, con párrafos
		/* 
		echo "<p>La suma de " . $num1 . " y " . $num2 . " es: " . ($suma) . "</p>\n";
		echo "<p>La resta de " . $num1 . " y " . $num2 . " es: " . ($resta) . "</p>\n";
		echo "<p>La multiplicacion de " . $num1 . " y " . $num2 . " es: " . ($multi) . "</p>\n";
		if($num2 == 0){
			echo "<p>No se puede dividir por 0!</p>";
			echo "<p>No se puede calcular el módulo!</p>";
		}else{
			echo "<p>La división de " . $num1 . " y " . $num2 . " es: " . ($div) . "</p>\n";
			echo "<p>" . $num1 . " módulo " . $num2 . " es: " . ($mod) . "</p>\n";
		}
		echo "<p>" .$num1 . " elevado a " . $num2 . " es: " . $pow . "</p>"; 
		*/
		

		// V2, con tabla
		echo "<table>";
		echo "<tr><td>La suma de " . $num1 . " y " . $num2 . " es: </td><td>" . ($suma) . "</td></tr>\n";
		echo "<tr><td>La resta de " . $num1 . " y " . $num2 . " es: </td><td>" . ($resta) . "</td></tr>\n";
		echo "<tr><td>La multiplicacion de " . $num1 . " y " . $num2 . " es: </td><td>" . ($multi) . "</td></tr>\n";
		if($num2 == 0){
			echo "<tr><td colspan='2'>No se puede dividir por 0!</td></tr>";
			echo "<tr><td colspan='2'>No se puede calcular el módulo!</td></tr>";
		}else{
			echo "<tr><td>La división de " . $num1 . " y " . $num2 . " es: </td><td>" . ($div) . "</td></tr>\n";
			echo "<tr><td>" . $num1 . " módulo " . $num2 . " es: </td><td>" . ($mod) . "</td></tr>\n";
		}
		echo "<tr><td>" .$num1 . " elevado a " . $num2 . " es: </td><td>" . $pow . "</td></tr>\n";
		echo "</table>";

	?>
</body>
</html>