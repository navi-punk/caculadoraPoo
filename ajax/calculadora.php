<?php
    include("conection.php");
    //include("agregarDatos.php");

    // get values
    $variable1 = $_POST["variable1"];
    $variable2 = $_POST["variable2"];
    $operador = $_POST["operador"];

	    	
    //validacion de que no vengan vacios los campos
    if(($variable1 != null) && ($variable2 != null)){        
        //validacion que tipo de operacion trae
        if($operador == 'suma'){
            $resp = calcular::suma($variable1,$variable2);
	    insertar();			
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

    class basededatos{
    	static public function insertar($variable1, $variable2,$operador,$resultado){
		 $query = "INSERT INTO calculadora.operaciones(numero1, numero2, operador, resultado) VALUES('$variable1', '$variable2', '$operador', '$resp')";
		 $result = pg_query($dbconn, $query);
	         if ($result === false) {
			$resultado = pg_last_error($dbconn);
		} else {
			$resultado = 'everything was ok';
		}		
		 echo $resultado;	
	}
    }	
    
    
    class calcular{
        
        static public function suma($variable1,$variable2){
            $resultado = $variable1 + $variable2;
	    //basededatos::insertar($variable1,$variable2,$operador,$resultado);	
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
                
                echo "No se puede dividir en 0";
                
            }else{
                
                calcular::division($variable1,$variable2);
            }
            
        }
    
    
    }

	function insertar(){
		 $query = "INSERT INTO calculadora.operaciones(numero1, numero2, operador, resultado) VALUES(3, 2, 'suma', 5)";
		 $result = pg_query($dbconn, $query);
	         if ($result === false) {
			$resultado = pg_last_error($dbconn);
		} else {
			$resultado = 'everything was ok';
		}		
		 //echo $resultado;	
	}
?>
