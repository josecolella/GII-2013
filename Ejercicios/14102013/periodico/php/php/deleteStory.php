<?php
		// ini_set('display_errors', true);
		// error_reporting(E_ALL);
		/**
		 * Este script borrar una noticia 
		 * elegida por el administrador
		 *
		 * @author Jose Miguel Colella <josecolella@correo.ugr.es>
		 * @version 1.0
		 * 
		 */
		include_once('BreakingNewsDB.php');
		$breakingNews = new BreakingNewsDB();
		$breakingNews->connect();
		$breakingNews->removeStory($_POST["numStory"]);
		$breakingNews->close();

		$url = '../admin.php';

		header( "Location: $url" );


?>