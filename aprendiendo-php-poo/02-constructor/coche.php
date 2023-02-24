
<?php

//PROGRAMACION ORIENTADA A OBJETOS EN PHP

//Definir una clase (molde para crear mas objetos de tipo coche con caracteristicas parecidas)

class Coche{
    
    //Atributos o propiedades(variables)//
    public  $color;
    private  $modelo;
    protected   $velocidad;
    public  $caballosF;
    public  $plazas;


    //Crear constructor/Define valor de atributos//
    public function __construct($color, $marca, $velocidad ,$caballaje , $plazas){
        $this->color=$color;
        $this->modelo=$marca;
        $this->velocidad=$velocidad;
        $this->caballosF=$caballaje;
        $this->plazas=$plazas;
    }



    
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

    public function mostrarInformacion(Coche $objeto){
        if(is_object($objeto)){
        $informacion ="<h1>Informacion del coche</h1>";
        $informacion .= "<br/>Modelo: ".$objeto->modelo;
        $informacion .= "<br/>Color: ".$objeto->color;
        $informacion .= "<br/>Velocidad: ".$objeto->velocidad;
     
    }else{
        $informacion = "Tu dato es este ".$objeto;
    }
    return $informacion ;



    }
}






// //Crear un objeto / instanciar una clase
// $coche = new Coche();
// //Usar los metodos
// echo $coche->getVelocidad();

// $coche->setColor('Amarillo');
// echo "El color del coche es: ".$coche->getColor().'<br>';
// $coche->acelerar();
// $coche->acelerar();
// $coche->acelerar();
// $coche->frenar();

// echo "Velocidad del coche: ".$coche->getVelocidad(); 






// //Instanciar nuevamente la clase
// $coche2 = new Coche();
// $coche2->setColor('Verde');
// $coche2->setModelo('Gallardo');



?>