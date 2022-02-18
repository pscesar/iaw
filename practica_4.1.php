<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Números Impares</title>
</head>
<body>
	<?php  

		$impar = 1;

		while ($impar<=100)
		{
			echo $impar . "<br/>";
			$c = $c + $impar;
			$impar = $impar + 2;
		}
		echo "La suma total es $c";

	?>
</body>
</html>