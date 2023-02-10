<?php


/*

1. Una funcion
2. La funcion debe validar un email con filter_var
3. Recoger una variable por GET y validarla 
4. Mostrar el resultado
*/

function validarEmail($datos){
 $status = "No valido";
if(is_string($datos) && filter_var($datos,FILTER_VALIDATE_EMAIL)){
                $status = "Valido";
}
        return $status;
}

if(isset($_GET['email'])){

        echo validarEmail($_GET['email']);     

}else{
        echo "Pasa por get un email";
}





?>