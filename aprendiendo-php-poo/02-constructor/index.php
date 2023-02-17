<?php

require_once ("coche.php");


$coche = new Coche("Amarillo", "Ferrari", 200,3,3);
$coche2 = new Coche("Verde", "Ferrari", 200,3,3);
$coche3 = new Coche("Azul", "Ferrari", 200,3,3);




echo $coche->mostrarInformacion($coche);



// var_dump($coche);

// var_dump($coche);
// var_dump($coche3);
// var_dump($coche2);







?>