<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cuadrados</title>
</head>
<body>
	<?php  

		$i=1;
		$l=1;

		while ($i<=50)
		{
			$l = $i ** 2;
			echo "El cuadradro de $i es $l" . "<br>";
			$i = $i + 1;
			$c = $c + $l;
		}
		echo "La suma es $c" . "<br>";

	?>
</body>
</html>