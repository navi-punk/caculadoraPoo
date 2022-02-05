<?php
	if(isset($_POST['resp']))
	{

		include("conexion.php");

		// get values

		$variable1 = $_POST['variable1'];
		$variable2 = $_POST['variable2'];
    $operador = $_POST['operador'];
    $resp = $_POST['resp'];



		$query = "INSERT INTO operaciones(numero1, numero2, operador, resultado) VALUES('$variable1', '$variable2', '$operador', '$resp', '$date')";
		if (!$result = pg_query($dbconn, $query)) {
	        exit(pg_error($dbconn));
	    }
	    echo "1 Record Added!";
	}
?>
