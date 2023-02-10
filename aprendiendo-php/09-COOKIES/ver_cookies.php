<?php

/*
Para mostrar el valor de las cookies tengo, que usar $_COOKIE, una variable superglobal,
es un array asociativo.
*/

if(isset($_COOKIE['micookie'])){
    echo "<h1>" . $_COOKIE['micookie'] . "<h1>";

}else{
    echo "No existe la COOKIE";
}


if(isset($_COOKIE['unYear'])){
    echo "<h1>" . $_COOKIE['unYear'] . "<h1>";

}else{
    echo "No existe la COOKIE";
}
?>

<a href="borrar_cookies.php">Borrar Cookies</a>
<a href="crear_cookie.php">Crear Cookies</a>
