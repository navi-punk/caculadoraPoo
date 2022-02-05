<?php
    include("conection.php");

    // get values
    $variable1 = $_POST["variable1"];
    $variable2 = $_POST["variable2"];
    $operador = $_POST["operador"];


    //validacion de que no vengan vacios los campos
    if(($variable1 != null) && ($variable2 != null)){
        
        
        
        //validacion que tipo de operacion trae
        if($operador == 'suma'){
            calcular::suma($variable1,$variable2);
        }elseif($operador == 'resta'){
            calcular::resta($variable1,$variable2);
        }elseif($operador == 'multi'){
            calcular::multiplicacion($variable1,$variable2);
        }elseif($operador == 'divi'){
            calcular::validacionDivision($variable1,$variable2,$operador);
        }
    }else{
        
        echo "Debe ingresar datos ";
    }
    
    class calcular{
        
        static public function suma($variable1,$variable2){
            
            $resultado = $variable1 + $variable2;
            $query = "INSERT INTO calculadora.operaciones(numero1, numero2, operador, resultado) VALUES('$variable1', '$variable2', '$operador', '$resultado', '$date')";
		if (!$result = pg_query($dbconn, $query)) {
	        exit(pg_error($dbconn));
	    }
	    echo $resultado;
        }
    
        static public function resta($variable1,$variable2){
            
            $resultado = $variable1 - $variable2;
            echo $resultado;
        }
        static public function multiplicacion($variable1,$variable2){
            
            $resultado = $variable1 * $variable2;
            echo $resultado;
        }
        static public function division($variable1,$variable2){
            
            $resultado = $variable1 / $variable2;
            echo $resultado;
            
        }
	    
	    
        static public function validacionDivision($variable1,$variable2,$operador){
            //validacion division en 0 
            if($variable2 == 0 && $operador == 'divi'){
                
                echo "no se puede dividir en 0";
                
            }else{
                
                calcular::division($variable1,$variable2);
            }
            
        }
    
    
    }   
?>
