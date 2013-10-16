
<?php
		// ini_set('display_errors', true);
		// error_reporting(E_ALL);
		/**
		 * Este script añade un textarea en la pagina 
		 * del administrador para que pueda insertar
		 * una noticia de ultima hora
		 * 
		 * @author Jose Miguel Colella
		 * @version 1.0
		 */
		include_once('BreakingNewsDB.php');
		$breakingNews = new BreakingNewsDB();
		$breakingNews->connect();	
		$breakingNews->insertStory();
		$breakingNews->close();

		$url = '../admin.php';

		header( "Location: $url" );


?>