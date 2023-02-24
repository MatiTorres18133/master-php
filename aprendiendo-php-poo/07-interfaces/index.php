<?php

interface Ordenador {

    public function encender();

    public function apagar();

    public function reiniciar();

    public function desfragmentar();
    public function detectarUsb();

}



class iMAC implements Ordenador{
    public $modelo;


    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getModelo(){
        return $this->modelo ;
    }

    public function encender(){

    }
    public function apagar(){
  
    }
    public function reiniciar(){}

    public function desfragmentar(){}
    public function detectarUsb(){}
}



$maquintosh = new iMAC();
$maquintosh->setModelo("MACBOCK");
var_dump($maquintosh);


?>