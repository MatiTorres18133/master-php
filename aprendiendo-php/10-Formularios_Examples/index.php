<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Formularios </title>
</head>
<body>
<h1>Formulario</h1>

<form action="" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre</label>
    <p><input type="text" name="nombre" autofocus="autofocus"> </p>
    <label for="apellido">Apellido</label>
    <p><input type="text" name="apellido" required="required" placeholder="ingrese apellido"></p> 

    <!--BOTON-->
    <label for="boton">Boton:</label>
    <p><input type="button" name="boton" value="ENVIAR" ></p> 


    <!--CHECKBOX-->
    <label for="sexo">Sexo: </label>
    <p>
        Hombre<input type="checkbox" name="sexo" value="Hombre">
        Mujer <input type="checkbox" name="sexo"  value="Mujer">

    </p> 

    <!--COLOR-->
    <label for="color">Color</label>
    <p><input type="color" name="color" ></p>


    <!--FECHA-->
    <label for="fecha">Fecha</label>
    <p><input type="date" name="fecha" ></p>

        <!--CORREO-->
    <label for="correo">Email: </label>
    <p><input type="email" name="correo" ></p>

        <!--ARCHIVO-->
        <label for="archivo">Archivo</label>
    <p><input type="file" name="archivo" multiple="multiple"></p>


       <!--TEXTAREA-->
    <textarea name="" id="" cols="30" rows="10">

    </textarea><br>
       <!--SELECT-->
        Peliculas:
        <select name="peliculas">
            <option value="peli1">Spiderman</option>
            <option value="peli2">Gran torino</option>
            <option value="peli3">Jungla</option>
            <option value="peli4">Spiderman</option>
        </select> <br>
    <input type="submit" value="Enviar">
</form>

<?php

?>
    
</body>
</html>