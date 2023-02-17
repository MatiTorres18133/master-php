<?php 
require_once("clases.php");


$persona = new Persona();

$persona->setNombre('Victor');

var_dump($persona);


/*CREAR PERSONA INFORMATICA CON HERENCIAS DE PERSONA */

$informatico = new Informatico();

var_dump($informatico);



$tecnico_redes = new TecnicoRedes();

var_dump($tecnico_redes);

?>