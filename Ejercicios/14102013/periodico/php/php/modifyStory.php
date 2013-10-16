<?php

	// ini_set('display_errors', true);
	// error_reporting(E_ALL);
	/**
	 * Este script se usar para modificar las noticias de ultima hora
	 * @author Jose Miguel Colella <josecolella@correo.ugr.es>
	 * @version 1.0
	 */


	include_once('BreakingNewsDB.php');
	$breakingNews = new BreakingNewsDB();
	$breakingNews->connect();
	$breakingNews->deleteAllElements();	
	$breakingNews->modifyStory();
	$breakingNews->close();

	$url = '../admin.php';

	header( "Location: $url" );


?>