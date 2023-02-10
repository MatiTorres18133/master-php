<?php


//BORRAR LAS COOKIES
if(isset($_COOKIE['micookie']) && isset($_COOKIE['unYear'])){
    //borrar cookie
    unset($_COOKIE['micookie']);
    unset($_COOKIE['unYear']);

    //caducar cookie
    setcookie('micookie', "", time() - 100);
    setcookie('unYear', "", time() - 100);

}



//Redireccionar a una pagina 
header("Location:ver_cookies.php");
?>

