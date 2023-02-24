<?php


Class Destructor{

    public $nombre;


    public function __construct(){
        echo "Creando instancia...</br> ";
    }

    public function __destruct(){
        echo "</br>Instancia cerrada.";
    }
}


$usuario = new Destructor();
for($i=0; $i<40 ; $i++){
    echo $i."</br>";
}



?>