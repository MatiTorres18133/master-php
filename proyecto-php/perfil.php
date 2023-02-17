<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/header.php';?>
<?php require_once 'includes/lateral.php';?>


<div class="principal">

<h1>Mis datos</h1><br>
<?php 
            if(isset($_SESSION['completado'])):?>
              <div class ="alerta-exito"> 
                <?= $_SESSION['completado'];?>
            </div>
            <?php elseif(isset($_SESSION['errores']['general'])): ?>
                <?= $_SESSION['errores']['general'];?>
                
            <?php endif; ?>
            <!--MOSTRAR ERRORES-->
            <br>

            <!--INICIO DE FORMULARIO-->
            <form action="actualizarUser.php" method="POST" >
            <label for="nombre">Ingrese su nombre</label>
            <?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'], 'nombre'):' ';?>
                <input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre'];?>"><br>
                
                <label  for="apellidos">Ingrese su apellido</label>
                <?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'], 'apellido'):' ';?>
                <input type="text" name="apellido" value="<?=$_SESSION['usuario']['apellidos'];?>"><br>
                <label for="email">Ingrese su email</label>
                <?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'], 'email'):' ';?>
                <input type="email" name="email" value="<?=$_SESSION['usuario']['email'];?>"><br>
               
                

             

                <input type="submit" value="Actualizar datos">
                
            </form>
            <?php borrarErrores(); ?>
</div>



<?php require_once 'includes/footer.php'?>





