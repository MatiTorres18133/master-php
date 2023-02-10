<?php


$cantantes = ['Shakira','2pac','Drake'];
$numeros = [1, 2, 3, 4, 5];
var_dump($cantantes);

//ORDENAR
sort($numeros);
var_dump($numeros);


//AGERGAR ELEMENTOS AL ARRAY

$cantantes[] = "natos";
array_push($cantantes, 'Waor');
var_dump($cantantes);


//ELIMINAR EL ULTIMO ELEMENTO DEL ARRAY;

array_pop($cantantes);
var_dump($cantantes);

//ELIMINAR UN ELEMENTO EN CONCRETO DEL ARRAY;
unset($cantantes[2]);
var_dump($cantantes);



//ELEGIR UN ELEMENTO ALEATORIO DEL ARRAY;
$indice =  array_rand($cantantes);
echo $cantantes[$indice];

//Dar la vuelta 
var_dump(array_reverse($numeros));

//Buscar dentro de un array

$resultado = array_search('natos', $cantantes);
var_dump($resultado);




?>