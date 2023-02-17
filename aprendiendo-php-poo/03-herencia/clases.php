<?php


//HERENCIA: Nos permite compartir atributos y metodos entre clases


class Persona{

    public $nombre;
    public $apellidos;
    public $edad;
    public $altura;


    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setNombre($nombre){
        return $this->nombre= $nombre;
    }
    public function setApellidos($apellidos){
        return $this->apellidos= $apellidos;
    }
    public function setEdad($edad){
        return $this->edad= $edad;
    }
    public function setAltura($altura){
        return $this->altura= $altura;
    }


    public function hablar(){
        return "Estoy hablando";
    }

    public function caminar(){
        return "Estoy caminando";
    }
}



class Informatico extends Persona{
    public $lenguajes;
    public $experiencia_programador;


    public function __construct(){
        $this->lenguajes="HTML ,CSS ,PHP";
        $this->experiencia_programador=10;

    }


    public function sabeLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;
        
        return $this->lenguajes;
    }



    public function programar(){
        return "Soy programador";
    }

    public function repararOrdenador(){
        return 'Reparar ordenador';
    }

    public function hacerOfimatica(){
        return "Estoy escribiendo word ";
    }
}


class TecnicoRedes extends Informatico{

    public $testingRedes;
    public $experiencia_Redes;
    
    public function __construct(){
        //HEREDAR datos de la clase padre 
        parent::__construct();


        $this->testingRedes = "EXPERTO";
        $this->experiencia_Redes = 5;

    }
    public function auditoria(){
        return "Estoy auditando una red";
    }


}
?>