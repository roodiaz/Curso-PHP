<?php

    function calcular($operacion){

        global $num1;
        global $num2;

        if(!strcmp("Suma",$operacion)){
            return ($num1+$num2);
        }
        if(!strcmp("Resta",$operacion)){
            return ($num1-$num2);
        }
        if(!strcmp("Multiplicacion",$operacion)){
            return ($num1*$num2);
        }
        if(!strcmp("Modulo",$operacion)){
            return ($num1%$num2);
        }
        if(!strcmp("Division",$operacion)){
            if($num2 == 0){
                return 0;
            }
            else{
                return ($num1/$num2);
            }
        }
    }

?>