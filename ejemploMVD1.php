<?php
	
	// Aqui tenemos las funcionalidades
	
	function enumerarElementos($listaDeseos) {
		
		foreach ($listaDeseos as $deseo) {
			echo "<li>" . $deseo . "</li>";
			
		}

	}
?>