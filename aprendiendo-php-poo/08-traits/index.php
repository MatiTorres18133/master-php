<?php

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }

    
}

class Coche{
    public $nombre;
    public $marca;

    use Utilidades;

}

class Persona {
public $nombre;
public $apellido;

use Utilidades;
}


class videoJuego{
    public $nombre;
    public $anio;
    use Utilidades;
}

$coche = new Coche();
$coche->nombre= "Ferrari";
$coche ->mostrarNombre();




$persona = new Persona();
$persona ->nombre ="Jorge";
$persona -> mostrarNombre();



$videojuego= new videoJuego();
$videojuego -> nombre = "Spiderman";
$videojuego ->mostrarNombre();
?>