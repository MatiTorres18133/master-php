<?php require_once('includes/conexion.php');?>
<?php require_once('includes/helpers.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../proyecto-php/css/style.css">
    <title>Bienvenidos al BLOG</title>
</head>

    <!--CABECERA-->
<header id="header">
    <!--LOGO-->
    <div id="LOGO">
        <a href="index.php">Blog de videojuegos</a>
    </div>
    <!--MENU-->
   
    <nav id="menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <?php 
            $categorias = conseguirCategorias($db);
            if(!empty($categorias)):
            ?>
            <?php 
                while($categoria =mysqli_fetch_assoc($categorias)):?>
                        <li>
                            <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                        </li>
                <?php 
                endwhile;
                endif;
                ;?>
            <li><a href="index.php">Sobre mi</a></li>
            <li><a href="index.php">Contacto</a></li>

        </ul>
    </nav>
    <div class="clearfix"></div>
</header>

