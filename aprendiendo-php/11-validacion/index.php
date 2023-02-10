<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Validacion de formularios</h1>
    <?php
    if (isset($_GET['error'])){
        $error = $_GET['error'];
        if($error == "erroNombre"){
            echo '<strong style="color:red">Introduce un nombre valido</strong>';
        }else 
        if($error == "erroPasss"){
            echo '<strong style="color:red">Introduce una contra valida</strong>';
        }else
        if($error == "edad"){
            echo '<strong style="color:red">Introduce una edad valida</strong>';
        }else

        if($error == "email"){
            echo '<strong style="color:red">Introduce un email valido</strong>';
        }else
        if($error == "faltan_valores"){
            echo '<strong style="color:red">Faltan valores</strong>';
        }
    }
    ?>

    <form action="procesarForm.php" method="POST">

    <label for="user">Usuario</label><br>
    <input type="text" name="user" maxlength="20" required="required" ><br>


    <label for="password">Contrasenia</label><br>
    <input type="password" name="password" maxlength="40" required="required"><br>



    <label for="edad">Edad</label><br>
    <input type="number" name="edad" maxlength="2" required="required" pattern="[0-9]+"><br>



    <label for="mail">Email</label><br>
    <input type="email" name="mail"><br>


  <input type="submit"  value="Enviar"><br>
    </form>
</body>
</html>