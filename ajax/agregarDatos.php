<?php
	
		include("conection.php");
		echo "INSERT";
		// get values

		$variable1 = $_POST['variable1'];
		$variable2 = $_POST['variable2'];
    		$operador = $_POST['operador'];
	    	$resp = $_POST['resp'];

		
		$query = "INSERT INTO operaciones(numero1, numero2, operador, resultado) VALUES(1, 3, mult, 3)";
		$result = pg_query($dbconn, $query);
		
		//$query = "INSERT INTO operaciones(numero1, numero2, operador, resultado) VALUES('$variable1', '$variable2', '$operador', '$resp', '$date')";
		if (!$result) {
	        exit(pg_error($dbconn));
	    	}
	    	echo "1 Record Added!";
?>
