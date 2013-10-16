<?php
  
  /**
   * Este script sirve para cerrar la session con el servidor
   * @author Jose Miguel Colella <josecolella@correo.ugr.es>
   * @version 1.0
   * 
   */

  //ini_set('display_errors', true);
  //error_reporting(E_ALL);
  session_start();

  // //Cerramos la session con el usuario
   if(isset($_SESSION['username']))
     unset($_SESSION['username']);
   
  //Cerramos la session completamente
  session_destroy();
  //Ahora solo con session_start podemos comenzar otra sesion
  
  //Redireccion a la pagina principal. El usuario tiene una sesion establecida
  $url = '../index.php';

  //Se va para la pagina principal despues de tener una cuenta
  //Cosa nueva
  header( "Location: $url" );
?>
