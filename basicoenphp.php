<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
 <link rel="stylesheet" href="css/bootstrap.css" >
</head>

<body>
<div class="container">
	<div class="jumbotron text-center">
		<h1>esto es html</h1>
	</div>



	<?php //tipos de datos o de variables
	$nombre="Omar Fernandez";// caracter
	$edad=26;//entero
	$telefono="0414-4404061";//caracter
	$estatura=1.81; //dicimal
	$fechahoy=date("d/m/y");//fecha

	//concatenar
	echo "<h1>tu nombre es:".$nombre."</h1>"."<br>";
	echo "<h1>tu edad es:".$edad."</h1>"."<br>";
	echo "<h1>tu telefono es:".$telefono."</h1>"."<br>";
	echo "<h1>tu estatura es:".$estatura."</h1>"."<br>";
	echo "<h1>la fecha de hoy es:".$fechahoy."</h1>"."<br>";

	//ciclo while
	echo "</br>";
	echo "<h1> while</h1>";
	$seguir="s";
	$contador=1;
	while ($seguir=="s"){
		echo("<h1>$contador</h1>");
		$contador=$contador+1;
		if ($contador==10)
		{
			$seguir='n';
		}
	}

	//ciclo do while
	echo "</br>";
	echo "<h1> do while</h1>";
	$contador=1;
	do{

		echo("<h1> $contador</h1>");
		$contador++;
	}while($contador<10);

	//ciclo for
	echo "</br>";
	echo "<h1> for</h1>";
	for ($i=0;$i<=10;$i++){
		echo("<h1> $i </h1>");
	}
	?>

</div>

</body>
</html>
