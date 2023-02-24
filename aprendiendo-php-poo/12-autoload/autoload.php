<?php

//Cargar todos los archivos de las clases que yo tenga para no hacer muchos require
function app_autloader($class){

    include 'clases/' . $class . ".php";
}

spl_autoload_register('app_autloader');



?>