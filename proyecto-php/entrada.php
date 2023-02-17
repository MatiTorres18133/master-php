<?php require_once 'includes/helpers.php';?>
<?php require_once 'includes/header.php';?>


<?php 
    $entrada_actual = conseguirEntrada($db, $_GET['id']);
    
    
    if(!isset($entrada_actual['id'])){
        header("Location:index.php");
        }
?>

<?php require_once 'includes/redireccion.php';?>

<?php require_once 'includes/lateral.php';?>
<body>
<!--CAJA PRINCIPAL-->
<div class="principal">

    <h1 style="color:#007ee5">Entradas de <?=$entrada_actual['titulo']?></h1>
    <br>
    <hr>
    <h2 style="color:#007ee5"><?=$entrada_actual['Categoria']?></h2>
    <P><strong>CREADA EL: </strong><?=$entrada_actual['fecha']?></P>
    <p><strong>ENTRADA DE: </strong><?=$entrada_actual['usuario']?></p>
    <p><?=$entrada_actual['descripcion']?></p>

    <?php
    if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id']== $entrada_actual['usuario_id']):?>
     <div class="row">
    <a id="botoncerrar" href="borrar_entrada.php?id=<?=$entrada_actual['id']?>">Borrar entrada</a>
    <a id="botongen" href="editar_entrada.php?id=<?=$entrada_actual['id' ]?>">Editar entrada</a>
     </div>
     
<?php else:?>
    <br>
    <div id="alerta"><H4>Usted no es propietario de esta entrada</H4></div>

    <?php endif;?>
</div>
</body>


<?php require_once 'includes/footer.php'?>

