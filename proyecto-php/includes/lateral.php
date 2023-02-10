 
 <?php require_once('includes/helpers.php')?>
 
 <!--BARRA LATERAL-->
 <aside id="sidebar">
        <div id="login" class="block-aside">
            <h3>Iniciar sesion</h3>
            <br>
            <form action="login.php" method="POST" >
                <label for="email">Ingrese su email</label>
                <input type="email" name="email"><br>
                <label for="password">Ingrese su clave</label>
                <input type="password" name="password"><br>
                <input type="submit" value="Ingresar">
            </form>
        </div>

        <div id="register" class="block-aside">
          

            <h3>Registrate</h3>
            <!--MOSTRAR ERRORES-->
            <?php 
            if(isset($_SESSION['completado'])):?>
              <div class ="alerta-exito"> 
                <?= $_SESSION['completado'];?>
            </div>
            <?php elseif(isset($_SESSION['errores']['general'])): ?>
                <?= $_SESSION['errores']['general'];?>
                
            <?php endif; ?>

            <br>
            <form action="register.php" method="POST" >
            <label for="nombre">Ingrese su nombre</label>
            <?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'], 'nombre'):' ';?>
                <input type="text" name="nombre"><br>
                
                <label  for="apellidos">Ingrese su apellido</label>
                <?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'], 'apellido'):' ';?>
                <input type="text" name="apellido">
                

                <label for="email">Ingrese su email</label>
                <?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'], 'email'):' ';?>
                <input type="email" name="email"><br>
               

                <label for="pass">Ingrese su clave</label>
                <?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'], 'pass'):' ';?>
                <input type="password" name="pass"><br>
                

                <input type="submit" value="Ingresar">
                
            </form>
            <?php borrarErrores(); ?>
          
        </div>
    </aside>

  

   