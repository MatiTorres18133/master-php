<?php

class Usuario {


    const URL_COMPLETA = "http://localhost";
    public $email ;
    public $password;



    function getEmail(){
        return $this->email;
    }

    function getPassword(){
        return $this->password;
    }

    function setEmail($email){
        return $this->email=$email;
    }

    function setPass($password){
        return $this->password =$password;
    }
}

$usuario = new Usuario();
//ACCEDER A LA COSNTANTE
echo $usuario::URL_COMPLETA;
//OTRA MANERA
echo Usuario::URL_COMPLETA;

?>