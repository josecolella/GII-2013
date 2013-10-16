
<?php

	// ini_set('display_errors', true);
	// error_reporting(E_ALL);
	/**
	 * Este script sirve para insertar un usuario dentro
	 * de una base de datos
	 *
	 * @author Jose Miguel Colella <josecolella@correo.ugr.es>
	 * @version 1.0
	 */
	session_start();

	include_once('UserVerification.php');

	$user = new UserVerification();
	$user->connect();
	$user->setInsertVariables();
	$user->insertUser();

  $_SESSION['username'] = $user->getUserName();

	$user->close();


	echo "<script>alert('Registración Completada'); location.href='../index.php';</script>";
	//Redireccion a la pagina principal. El usuario tiene una sesion establecida
	// $url = '../index.html';

	// //Se va para la pagina principal despues de tener una cuenta
	// //Cosa nueva
	// header( "Location: $url" );

	//Ademas despues de registrarse, se deberia desaparecer los botones
	//de registrarse e iniciar sesion, y se deberia poner un boton de cerrar sesion.

?>
