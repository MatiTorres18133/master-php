<?php

require_once('../vendor/autoload.php');
require_once('db.php');
require_once('pagination.php');



// ESTILO DE PAGINATION
echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

//TRAER TODAS LAS NOTAS DE LA BD
while($nota = $notas->fetch_object()){
    echo "<H1>{$nota->titulo}</H1>";
    echo "<H3>{$nota->descripcion}</H3>";
}


$pagination ->render();


?>