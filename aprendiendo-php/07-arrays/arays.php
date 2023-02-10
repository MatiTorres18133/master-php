<?php

/*
ARRAY: Es una coleccion o conjunto de datos, bajo un unico nombre
*/

$peliculas = array('batman', 'spiderman', 'Minecraft');

//Array Asociativo
$personas = array(
    'nombre' => "Victor",
    'apellido' => 'Robles'
);

$contactos = array(
    array(
        'Nombre' => "Antonio",
        'Apellido' => 'Sambueza'
    ),
    array(
        'Nombre' => "Jorge",
        'Apellido' => 'Cabezas'
    ),
    array(
        'Nombre' => "Raul",
        'Apellido' => 'Rios'
    ),
);

foreach($contactos as $key=> $contacto){
    echo $contacto['Nombre']."<br/>";
}



//========================================================
/*Recorrer Arrays ciclo for */
echo "<h1>Listado de peliculas </h1>";
echo "<ul>";
for($i = 0; $i<count($peliculas); $i++){

    echo "<li>" . $peliculas[$i] . "</li>";
}
echo "</ul>";
//========================================================
/*Recorrer Arrays ciclo foreach */
echo "<ul>";
foreach($peliculas as $pelicula ){
    echo "<li>" . $pelicula . "</li>";

}
echo "</ul>";


?>