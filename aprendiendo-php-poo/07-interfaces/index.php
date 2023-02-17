<?php

interface Ordenador {

    public function encender();

    public function apagar();

    public function reiniciar();

    public function desfragmentar();
    public function detectarUsb();

}



class iMAC {
    public $modelo;


    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getModelo(){
        return $this->modelo ;
    }
}



$maquintosh = new iMAC();

var_dump($maquintosh);


?>