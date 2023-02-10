<?php

/*Recoger 2 numero por la url por parametro GET y hacer todas las operacionesbasicas de una calculadora
*/
/*ISSET (SIRVE PARA SABER SI EL TIPO GET TIENE DATOS O NO) */
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    $suma = $numero1 + $numero2;
    $multiplicacion = $numero1 * $numero2;
    $resta = $numero1 - $numero2;
    $division = $numero1 / $numero2;

    echo "<h1>Suma: " . $suma . "</h1>";
    echo "<h1>Resta: " . $resta . "</h1>";
    echo "<h1>Multiplicacion: " . $multiplicacion. "</h1>";
    echo "<h1>Division: " . $division . "</h1>";

}else{
    echo "<h1>Introduce los valores correctamente por la URL</h1>";
}





?>