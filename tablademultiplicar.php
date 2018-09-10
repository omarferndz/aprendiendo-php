<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tabla de Multiplicar</title>
 <link rel="stylesheet" href="css/bootstrap.css" >
</head>

<body>

<div class="container text-center">
			
			<div class="col-md-4 col-md-offset-4">
			<form>
				<input type="number" name="t" placeholder="indique un numero" class="form-control" required>
				<input type="number" name="h" placeholder="indique hasta" class="form-control" required>
				<input type="submit" class="btn-primary btn-block" value="ok">
			</form>
			</div>
			<div class="clearfix"></div>
			
			<a href="?t=1" class="btn btn-danger btn-sm">1</a>
			<a href="?t=2" class="btn btn-danger btn-sm">2</a>
			<a href="?t=3" class="btn btn-info btn-sm">3</a>
			<a href="?t=4" class="btn btn-info btn-sm">4</a>
			<a href="?t=5" class="btn btn-default btn-sm">5</a>
			<a href="?t=6" class="btn btn-default btn-sm">6</a>
			<a href="?t=7" class="btn btn-primary btn-sm">7</a>
			<a href="?t=8" class="btn btn-primary btn-sm">8</a>
			<a href="?t=9" class="btn btn-succes btn-sm">9</a>
			<a href="?t=10" class="btn btn-succes btn-sm">10</a>
			
			<?php
			if (isset($_GET['t'])){ /*para que no caiga en t=y no mande ningun valor*/
				$t = $_GET['t'];
				}else{
				$t=1;
			}
	
			if (isset($_GET['h'])){ /*para que no caiga en t=y no mande ningun valor*/
				$h = $_GET['h'];
				}else{
				$h=10;
			}
				
			/*get= atajo un url*/
			/*post=estoy atrapando un formulario*/
			
			?>
			
			
	<table class="table table-bordered table-hover table-striped">
	
		<thead>
			<tr class="bg-primary">
				<td colspan="5"> <!--combina las columnas, el 5 sale de las 5 columnas de la tabla-->
					<h3>Tabla del <?php echo $t ?></h3>
				</td>
			</tr>
		</thead>
		
		<tbody>
			<tr>
			 <?php
				for($i=1;$i<=$h;$i++){
			
			
				
				?>
				<td><?php echo $t ?></td><!--zona dinamica-->
				<td>x</td>
				<td><?php echo $i ?></td>
				<td>=</td>
				<td><?php echo ($i*$t) ?></td>
			</tr>
			<?php
				}
				
				?>
		</tbody>
		
	</table>

		
</div>


</body>
</html>