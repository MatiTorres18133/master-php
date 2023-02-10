  <?php


//variables superglobales



//variables de servidor


 /*ACCEDER A DIRECCION IP  */ 
  echo '<h1>';
  echo $_SERVER['SERVER_ADDR'];
  echo '</h1>';


 /*NOMBRE DEL SERVIDOR */ 

  echo '<h1>';
  echo $_SERVER['SERVER_NAME'];
  echo '</h1>';
   

 /*ACCEDER AL SOFTWARE DEL SERVIDOR WEB  */ 

  echo '<h1>';  
  echo $_SERVER['SERVER_SOFTWARE'];
  echo '</h1>';

 /*ACCEDER AL NAVEGADOR WEB DEL CLIENTE  */ 

  echo '<h1>';
  echo $_SERVER['HTTP_USER_AGENT'];
  echo '</h1>';


 /*ACCEDER A LA DIRECCION IP DEL CLIENTE */ 
  echo '<h1>';
  echo $_SERVER['REMOTE_ADDR'];
  echo '</h1>';





  
   
  ?>