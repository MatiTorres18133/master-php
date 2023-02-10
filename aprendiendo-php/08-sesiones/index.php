<?php
/*
Sesion: Almacenar y percistir datos del usuario mientras que navega 
en un sitip web hasta que cierra sesion o cierra el navegador
*/

//Iniciar la sesion

session_start();

//Variable local
$variable_normal = "Soy una cadena de texto";

//Variable de sesion
$_SESSION['variable_persistente'] = "SESION ACTIVA";

echo $variable_normal . "<br/>";
echo $_SESSION['variable_persistente'];

?>