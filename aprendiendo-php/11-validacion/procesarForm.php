
<?php
$error = 'faltan_valores';
if(!empty($_POST['user'])&& !empty($_POST['password'])&& !empty($_POST['edad'])&& !empty($_POST['mail'])){
    $error = "Ok";
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $edad = (int)$_POST['edad'];
    $mail = $_POST['mail'];

    //validar nombre

    if (!is_string($user) || !preg_match("/[a-zA-z ]+/", $user)){
        $error = "erroNombre";

    }
    //validar nombre

    if (empty($pass) || strlen($pass) < 5){
        $error = "erroPasss";

    }

    
    //validar nombre

    if (!is_int($edad) ||!filter_var($edad, FILTER_VALIDATE_INT)){
        $error = "edad";

    }
    //validar nombre

    if (!is_string($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $error = "email";

    }
}else{
    $error = "faltan_valores";

}

if($error != "Ok"){
    header("Location:index.php?error=$error");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if($error == 'Ok'):?>

<h1>Datos validados correctamente</h1>
<p>Nombre : <?=$user?></p>
<p>edad :<?=$edad?></p>
<p>Mail :<?=$mail?></p>


<?php endif;?>
    
</body>
</html>