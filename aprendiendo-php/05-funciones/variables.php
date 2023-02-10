<?php


/*
VARIABLES LOCALES: Son las que estan declaradas dentro de la funcion y unicamente se usan dentro de ella.
VARIABLES GLOBALES: Son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de ellas
*/ 

//VARIABLE GLOBAL

$frase = "HOLA MUNDO";

function holaMundo(){

    global $frase; // DEFINIMOS LA VARIABLE $FRASE COMO GLOBAL PARA PODER UTILIZARLA DENTRO DE LA FUNCION.
    echo "<h1>$frase</h1>";
}


//Funciones variables

function buenasDias(){
    return "<h1>Hola buenos dias</h1>";
}

function buenasTardes(){
    return "<h1>Hey! que tal ha ido la comida</h1>";
}

function buenasNoches(){
    return "<h1>Buenas noches</h1>";
}
// $horario = "Noches";
$horario = $_GET['horario'];
$miFuncion = 'buenas' . $horario;
echo $miFuncion();

?>