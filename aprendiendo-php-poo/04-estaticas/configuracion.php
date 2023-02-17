<?php 

class Configuracion {

//atributos
public static $color;
public static $newsletter;
public static $entorno;




//Metodos
public static function setEntorno($entorno){
    self::$entorno = $entorno;
}
public static function setLetter($letter){
    self::$newsletter=$letter;
}
public static function setColor($color){
    self::$color=$color;
}

public static function getColor(){
    return self::$color;
}

public static function getLetter(){
    return self::$newsletter;
}

public static function getEntorno(){
    return self::$entorno;
}

}



?>