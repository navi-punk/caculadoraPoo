<?php
include("conection.php");

function insertar($variable1,$variable2,$operador,$resp){
	 $query = "INSERT INTO calculadora.operaciones(numero1, numero2, operador, resultado) VALUES('$variable1', '$variable2', '$operador', '$resp')";
	 $result = pg_query($dbconn, $query);
		
	if ($result === false) {
		return pg_last_error($dbconn);
	} else {
		return 'everything was ok';
	}
}
?>
