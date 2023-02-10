<?php

//DEBUGGEAR 
$nombre = "MATIAS TORRES";
var_dump($nombre);

//Fechas
echo date('d-m-y');
echo '<br/>';
echo time();

//Matematicas
echo "<br/>";  
echo "Raiz cuadradada de 10: ".sqrt(10);
echo "<br/>";
echo "Numero aleatorio entre 10 y 40: " . rand(10, 40);
echo "<br/>";
echo "Numero PI: " . pi();
echo "<br/>";
echo "Redondear numero 7.830123 => " . round(7.830123);

//Mas funciones GENEREALES =============>>
//obtener el tipo de dato de una variable
echo gettype($nombre);
echo "<br/>";

if(is_string($nombre)){
    echo "Esa variable es un string";
}

echo "<br/>";

if(!is_float($nombre)){
    echo "La variable nombre no es un numero con decimales";
}



?>