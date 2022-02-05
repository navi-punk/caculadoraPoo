<?php
    require("agregarDatos.php");


    $variable1 = $_POST["variable1"];
    $variable2 = $_POST["variable2"];
    $operador = $_POST["operador"];

	    	

    if(($variable1 != null) && ($variable2 != null)){        
        
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
	    //insertar($variable1,$variable2,$operador,$resultado); 	
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
  
            if($variable2 == 0 && $operador == 'divi'){
                
                echo "No se puede dividir en 0";
                
            }else{
                
                calcular::division($variable1,$variable2);
            }
            
        }
    
    
    }


?>
