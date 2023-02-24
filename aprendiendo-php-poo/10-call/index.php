<?php


class Persona {
    private $nombre;
    private $edad;

    private $ciudad;


    public function __construct($nombre,$edad,$ciudad){
        $this->$nombre = $nombre;
        $this->$ciudad = $ciudad;
        $this->$edad = $edad;
    
    }

    public function __call($name,$arguments ){
        $prefix_metod = substr($name,0,3);
        if($prefix_metod == 'get'){
            $nombre_metodo = substr(strtolower($name),3);
            return $this->$nombre_metodo;
        }else{
            return "El metodo no existe";
        }
      
    }
}


$persona = new Persona("Victor", 6, "madrid");

echo $persona -> getNombre();




?>