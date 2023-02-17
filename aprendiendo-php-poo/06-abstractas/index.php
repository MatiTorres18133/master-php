<?php

abstract class Ordenador {

    abstract public $encendido ;
    abstract public function enceder();
    public function apagar(){
        $this->encendido=false;
    }
}



class PcAsus extends Ordenador{ 

    public $software;

    public function arrancarSoftw(){
        $this->software=true;
    }

    public function enceder(){
        $this->encendido = true;
    }
}


$ordenador = new PcAsus();





?>