

 <aside id="sidebar">
 <div id="Buscador" class="block-aside">
            <h3>Buscar entradas</h3>
            <form action="buscar.php" method="POST" >
            
                <input type="text" name="busqueda"><br>
                <input type="submit" value="Buscar">
            </form>
        </div>

<!--COMPROBAR LOGIN Y MOSTRAR DATOS DE USUARIO-->
    <?php if(isset($_SESSION['usuario'])):?>
 <div id="usuario_logeado" class="block-aside">

<h3>Bienvenido <?= $_SESSION['usuario']['nombre']." ".$_SESSION['usuario']['apellidos']?></h3>

 <!--BOTONES DE SESSION-->
 <a id="botonverde" href="crear_entradas.php">Crear Entradas</a>
 <a id="botonverde" href="crear_categoria.php">Crear Categorias</a>

 <a id="botongen" href="perfil.php">Mis Datos</a>
 <a id="botoncerrar" href="cerrar.php">Cerrar Sesion</a>
 </div>
<?php endif;?>
<!--COMPROBAR LOGIN Y MOSTRAR DATOS DE USUARIO-->
<?php if(!isset($_SESSION['usuario'])):?>
        <div id="login" class="block-aside">
            <h3>Iniciar sesion</h3>

            <!--ALERTA DE ERROR SI EL USUARIO NO SE IDENTIFICA CORRECTAMENTE-->
                <?php if(isset($_SESSION['error_login'])):?>
                <div id="alerta">
                <?= $_SESSION['error_login']?>
                </div>
                <?php endif;?>
            <!--ALERTA DE ERROR SI EL USUARIO NO SE IDENTIFICA CORRECTAMENTE-->
            <br>
            <form action="login.php" method="POST" >
                <label for="email">Ingrese su email</label>
                <input type="email" name="email"><br>
                <label for="password">Ingrese su clave</label>
                <input type="password" name="password"><br>
                <input type="submit" value="Ingresar">
            </form>
        </div>



       <!--**************************************************************************************************************--> 
        <!--FORMULARIO REGISTRO DE USUARIOS-->
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
            <!--MOSTRAR ERRORES-->
            <br>

            <!--INICIO DE FORMULARIO-->
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
            <?php borrarErrores();?>
        </div>
        <?php endif;?>
    </aside>

  

   