
<?php

//ini_set('display_errors', true);
//error_reporting(E_ALL);
        /**
         * Este script sirve para autentificarse en el sistema y comenzar
         * una sesión
         *
         * @author Jose Miguel Colella <josecolella@correo.ugr.es>
         * @version 1.0
         */
        session_start();
        include_once('UserVerification.php');

        $user = new UserVerification();
        $user->connect();
        $user->setUser();
        if($user->verifyUser()) {
        	if(strcasecmp($user->getUserName(), "Admin") == 0)
        		echo "<script>alert('Has sido autentificado!'); location.href='../admin.php';</script>";
        	else
        		echo "<script>alert('Has sido autentificado!'); location.href='../index.php';</script>";
          //Registramos la variable de usuario
          $_SESSION['username'] = $user->getUserName();
        }
        else
        	echo "<script>alert('Combinación de nombre de usuario y contraseña errónea.'); location.href='../index.php';</script>";

        $user->close();

?>
