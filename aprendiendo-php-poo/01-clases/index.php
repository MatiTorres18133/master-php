<h1>Hola mundo php POO !</h1>
<?php

//PROGRAMACION ORIENTADA A OBJETOS EN PHP

//Definir una clase (molde para crear mas objetos de tipo coche con caracteristicas parecidas)

class Coche{
    
    //Atributos o propiedades(variables)
    public $color='Rojo';
    public $modelo='Ferrari';
    public $velocidad=200;
    public $caballosF=500;
    public $plazas=2;


    //Metodos , son acciones que hace el objetos (antes, funciones)
    public function getColor(){
        //Busca en eesta clase la propiedad X
        return $this->color;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function setColor($color){
        $this->color =$color;
    }
    public function acelerar(){
        $this-> velocidad++;  
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }

//Fin definicion de la clase;

}






//Crear un objeto / instanciar una clase
$coche = new Coche();
//Usar los metodos
echo $coche->getVelocidad();

$coche->setColor('Amarillo');
echo "El color del coche es: ".$coche->getColor().'<br>';
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad del coche: ".$coche->getVelocidad(); 






//Instanciar nuevamente la clase
$coche2 = new Coche();
$coche2->setColor('Verde');
$coche2->setModelo('Gallardo');



?>