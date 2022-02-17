<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Precisión</title>
</head>
<body>
	<?php  

	$x = 8 - 6.4;
	$y = 1.6;

	echo "Valor de x y" . "<br>";

	echo $x . "<br>";
	echo $y . "<br>";

	echo var_dump($x) . "<br>";
	echo var_dump($y) . "<br>";

	if ($x == $y) {
		echo "Iguales";
	} else {
		echo "Distintos" . "<br>";
	}
	
	echo var_dump($x == $y) . "<br>";

	if ($x = $y) {
		echo "Iguales";
	} else {
		echo "Distintos";
	}

	echo "<br>";

	echo var_dump($x = $y) . "<br>";

	$x = round($x, 2);
	$y = round($y, 2);

	var_dump($x == $y);

	?>
</body>
</html>