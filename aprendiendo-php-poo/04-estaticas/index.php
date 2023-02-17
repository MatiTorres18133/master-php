<?php

require_once('configuracion.php');


Configuracion::setColor('blue');
Configuracion::setEntorno('localhost');
Configuracion::setLetter(true);

//Mostrar variavles estaticas sin instanciar
echo Configuracion::$color."</br>";
echo Configuracion::$newsletter."</br>";
echo Configuracion::$entorno."</br>";

//Instanciar la clase y ver sus datos
$configuracion = new Configuracion();
$configuracion::$color="Rojo";
echo $configuracion::$color;



?>