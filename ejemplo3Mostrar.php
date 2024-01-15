<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ejemplo 3: mostrar los deseos</title>
	</head>
	<body>
	
		<p>Has elegido <?php echo $_POST['cantidad'] ?> deseos de <?php echo $_POST`['deseo'] ?></p>
		<h2>Lista Total</h2>
		
		<?php
			include "ejemploMVD2Valores";
			include "ejemploMVD1.php";
			enumerarElementos($lista);
			
			
		
		?>
		
		<?php
			if (!isset($_COOKIE['lista'])) {
				setcookie("lista", "", time() +200);
				
			} else {
				$listaDeseos = $_COOKIE['lista'];
			}
			
			$listaCompra .= $_POST['deseo'] . " " . $_POST['cantidad'];
			echo $listaCompra;
			setcookie("lista", $listaCompra . "<br>", time() + 500);
		?>
			
		<br>
		<a href="MVC.php">Volver</a>
		
	
	</body>

</html>