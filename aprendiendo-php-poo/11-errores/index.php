<?php

//Capturar excepciones susceptible a errores
try{
    throw new Exception("Hay un error"); 

}catch(Exception $e){
    echo "Ha habido un error ".$e->getMessage();



} finally {
    echo "Todo correcto";
}



?>