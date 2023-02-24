<?php

require_once('autoload.php');


// $usuario = new Usuario();
// echo $usuario->nombre."</br>";
// echo $usuario->email."</br>";


//Espacios de nombres y paquetes


use MisClases\Usuario, MisClases\Categoria,MisClases\Entrada;


class Principal{ 
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        $this->usuario=new Usuario;
        $this->categoria=new Categoria;
        $this->entrada=new Entrada;

    }
}

$principal = new Principal();
var_dump(get_class_methods($principal));
// var_dump($principal->usuario);

//Comprobar si existe una clase 

$clase = @class_exists('MisClases\Usuario');
if($clase == true ){
    echo "<h1>La clase SI existe </h1>";
}else{
    echo "<h1>La clase SI existe </h1>";
}


?>