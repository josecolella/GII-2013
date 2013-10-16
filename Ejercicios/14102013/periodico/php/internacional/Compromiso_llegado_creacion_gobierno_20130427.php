<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="ES">
<head>
	<meta charset="UTF-8"/>
	<meta name="Author" content="Jose Miguel Colella"/>
	<meta name="Description"content="En esta pagina se declara el contenido de la paginas especificas de las secciones">
	<meta name="Content-Language" content="es-ES"/>
	
	<title>Compromiso llegado en la creaci&oacute;n del un gobierno en Italia</title>
	

	<link rel="stylesheet" type="text/css" href="../css/newsPage.css">
	<link href='http://fonts.googleapis.com/css?family=Rye' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arbutus+Slab&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAB6fm8AcYd4AC4qIgCZjnoA3+bcAPT49gDg6t8AMi4lAPn5+QBWW1kASUQ5ALamlABgXkcAem1YAPz9/ACDblsAiIqKAFtoZQDu9+sA2eLaAHp8agCDelsA2uDdAIt3ZAC2vLsAc2lWALm9vgBzkIIAztXPAPn8+gB3b1YApZZ4AOXu4wCSnpkAeW5cAGZcSwCKh3kADwwKAHt0XACzwJIAwcvEABEQDQCZpZwAq8WzALO6tgBfcWYApKucAOLl5ACkr6gA+/z7AGJbSQBXYVsArK6uAD0yKgA4PC0ANTw2AKGycwDW4NYA2N7ZABMTDgDy8/MAFhcRAEQ+MwDJzs4AcWhVAHVrVQBncG0ARkY5AEtCNgD8/PwADwsJAL/LvQCqvaYAh4qEAO3w6wBsX00AVVQ/ANzi3QCuo4YA3OfaAJ6opwCKl5AAjJeQAJq2pADg5OMAytTPAHmFfwDh6eAAtauDAIKBfADQ2s8A0NjSACAfGADR29IAp7atAKqYeADX4M8AepyOAFZKPQCdn58Ag3JiAJulnwBBPC8AxdXBAEFAMgBxYVQAVVhDAAICAgCGemgAuLu8ABgZGQDi6eEAd2hXAPj6+AB1bVQAusK/AOTq5AAhGxYAd2xaAJOflwA2NCoAvMy5AIeGegCYn44ANzQqANHZ1gBkW0wAgY+DACQiGQAPDgsAbV5MABESDgDu8+0Aw9S/ABMVDgDa4dwAyMvIAMjMywDw9/AAmLWaALDBtAD2+fYAo7CmAPj6+QCisakAd2pVAIx+bABOQTYAqa6pAIBpUgDR3NcARU5LAH9sWwC9ycMATkw8AP///wCXoJsAgZKEAMLGwwCZoZ4AZ2JQAKfAsgCao5sAoKOSAJykngDF0cAAKScgACsnIACbqp4AhXphAFxOQgDKz8wAytLMAC8sJgC4wLsAzdjMAPn6+gCMo5MAkn5kAE5ENwDLu6wA0t3SADo8KQB8cmUAbF1LANjk1QDw8fIAFhUQAJ+oogC1ubkALS8nAFpYRgDh6+EARUc4AKWsrgDR19MAIR4ZAE9FOwBmWUkAfGxdAOnw5wA7OSoA1d/ZAG57eACxtLQAVE8+ALK3tADv8/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAm5ubm5s0zokzxMybm5ubm5ubm22uc45Exxdkxb2bm5ubm5dRtY+TC4J5rSK8EZubmxifV0e+tEtnOEhMfneIm5sIhzpdI3ASyIU5Apg8nJsapGNmFXazdUa7bgIPMGXDy4YHzU/GlHQuaslDoyg/UkIlSa8FQB2NhBMsfLgvISo7PU2lMXIgDrkGtg0ylcJQgHgQWm+SWWDPa79xaFjAVp4+CqYJYsEpmjVFVJlft1ubopFsA2mqQRmWsIqdHySbm6terHt6oAw3ypC6XLIWm5ubLX+MqH0ApzaDgSZOm5ubm5scsSeLK6EUHqlKm5ubm5ubm5tVAVNhGwSbm5ubmwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
	<script src="../js/jquery.js"></script>
	<script src="../js/displayStories"></script>
</head>
<body>
	<aside id="publicity">
		<aside class="toppublicity">
			<a href="http://www.mensfashiondepot.com/">
				<img src="../img/HorizontalAd.jpg" alt="publicidad" height="90" width="1000"/>
			</a>
		</aside>
		<aside class="rightpublicity">
			<a href="http://ifaw.org">
				<img src="../img/vertical_ad.png" alt="publicidad" height="600" width="120"/>
			</a>
		</aside>
		<aside class="leftpublicity">
			<a href="http://buysellads.com/">
				<img src="../img/vertical_ad2.png" alt="publicidad" height="600" width="120"/>
			</a>
		</aside>
	</aside>




	<section id="newspaper">
		<header>
			<h1><a href="../index.php">The Granada Post</a></h1>
			<script type="text/javascript">
				//Creamos una tag p donde esta la fecha
				var date = document.createElement("p"); 
				//Le asignamos la clase date
				date.className = "date"; 
				//Creamos un objeto fecha
				var currentDate = new Date();
				//Creamos un nodo donde se ubica la fecha
				var dateNode = document.createTextNode(currentDate.toDateString());
				//Lo agregamos al elemento <p> denotado por date
				date.appendChild(dateNode);
				//Lo escribimos
				document.write(date.innerHTML);
				</script>
				<!--Nuevo apartado HTML que agrega botones para autentificarse-->
				<?php
				echo '<section id="Identification">';
				echo '<nav>';
				if(isset($_SESSION['username'])) {
					echo '<ul class="displayedElements">';
					if(strcmp($_SESSION['username'],"Admin") == 0) {
						echo '<li>';
						echo '<a href="../admin.php">Administraci&oacute;n</a>';
						echo '</li>';
					}
					echo '<li>';
					echo '<form action="../php/LogOut.php" method="post">';
					echo '<a href="#">';
					echo '<input type="submit" value="Cerrar Sesi&oacute;n"/>'; 
					echo '</a>';
					echo '</form>';
					echo '</li>';
					echo '</ul>';
				}
				elseif(!isset($_SESSION['username'])) {

					echo '<ul class="displayedElements">';
					echo '<li>';
					echo '<a href="../formularioDiario.html">Registrarse</a>';
					echo '</li>';
					echo '<li>';
					echo '<a href="#">Iniciar Sesi&oacute;n <img src="../img/right-arrow.png" alt="right arrow" onmouseover="changeImage(\'../img/down-arrow.png\')" onmouseout="changeImage(\'../img/right-arrow.png\')" id="arrow"/></a>';
					echo '<ul>';
					echo '<li>';
					echo '<form action="../php/SignIn.php" onsubmit="return(validateUser())" method="post">';
					echo '<label for="UserName" class="label">Nombre de Usuario: </label>';
					echo '<input type="text" id="UserName" name="UserName" class="field" value="" maxlength="15" />';
					echo '<label for="Password">Contrase&ntildea: </label>';
					echo	'<input type="password" id="Password" name="Password" class="field" value="" maxlength="15"/>';
					echo '<input type="submit" value="Iniciar Sesi&oacute;n"/>';
					echo '</form>';
					echo '</li>';
					echo '</ul>';
					echo '</li>';
					echo '</ul>';
				}
				echo '</nav>';
				echo '</section>';
				?>

			</header>

			<section>
				<nav id="Tabs">
					<ul>
						<li class="selected"><a class="blueSection" href="../noticiaslocales.php">Noticias Locales</a></li>
						<li class="selected"><a class="redSection" href="../internacional.php">Internacional</a></li>
						<li class="selected"><a class="greenSection" href="../economia.php">Econom&iacute;a</a></li>
						<li class="selected"><a class="creamSection" href="../tecnologia.php">Tecnolog&iacute;a</a></li>
					</ul>
				</nav>
			</section>

			<section class="sectionName">
				<h2><a href="../internacional.php">Internacional</a></h2>
			</section>
			<section id="rightNewsGrouping">
				<section class="relatedStories">
					<h4>Noticias relacionadas</h4>
					<aside>
						<a href="http://www.bbc.co.uk/news/world-europe-17433142">
							<p>Perfil de Italia</p>
						</a>
					</aside>
					<aside>
						<a href="http://www.bbc.co.uk/news/world-europe-22323850">
							<p>Enrico Letta, primer ministro designado por Giorgio Napolitano, crea nuevo gobierno</p>
						</a>	
					</aside>
					<aside>
						<a href="http://www.bbc.co.uk/news/world-europe-22285883">
							<p>Perfil del nuevo ministro Italiano, Enrico Letta</p>
						</a>
					</aside>
					<aside>
						<a href="http://www.bbc.co.uk/news/world-europe-21613940">
							<p>Lider del Partido "Cinque Stelle" no quiere ligar su partido a otro</p> 
						</a>
					</aside>
					<aside>
						<a href="http://www.bbc.co.uk/news/world-middle-east-22298563">
							<p>&iquest;Pueden cooperar el nuevo gobierno de Italia creado de partidos de derecha e izquierda?</p>
						</a>	
					</aside>
				</section>
				<section class="smallAds">
					<aside>
						<a href="http://can-moveit.com">
							<img src="../img/anunciospublicitario3.png" alt="Anuncio Publicitario"/>
						</a>
					</aside>
					<aside>
						<a href="http://gfi.com/web-monitor">
							<img src="../img/anunciospublicitarios.png" alt="Anuncio Publicitario"/>
						</a>
					</aside>
					<aside>
						<a href="http://can-moveit.com">
							<img src="../img/anunciospublicitarios2.png" alt="Anuncio Publicitario"/>
						</a>
					</aside>
				</section>

			</section>


			<section class="highlightedStory">
				<h3 class="redSection" onmouseover="openRelatedStoriesPopUp()">Nuevo Gobierno en Italia</h3>
				<p class="author">Escrito por Sergio Gonzalez</p>
				<figure>
					<img src="../internacional/Compromiso_llegado_creacion_gobierno_20130427.png" alt="Primer Ministro de Italia, Enrico Letta" title="Primer Ministro de Italia, Enrico Letta"/>
					<figcaption>Enrico Letta recibió una ovación de pie de los miembros de la coalición después de su discurso inaugural.</figcaption>
				</figure>
				<p>Líder del Partido Democrático adjunto (<abbr title="Partito Democratico">PD</abbr>), Enrico Letta, se convierte en primer ministro al frente de una "gran coalición" como partido Pueblo de la Libertad (<abbr title="Popolo della Liberta">PDL</abbr>) de Silvio Berlusconi. Entre otros nombramientos clave propuestos, el Banco de Italia director general Fabrizio Saccomanni encabezará el Ministerio de Economía potente y ex comisario europeo Emma Bonino se convertirá en ministro de Relaciones Exteriores.</p>
				<p>En su discurso inaugural, el Sr. Letta dijo que iba a viajar a Berlín y otras grandes capitales europeas esta semana para presionar a los socios de la UE para cambiar a políticas más orientadas al crecimiento.</p>

				<p>"Italia está muriendo de austeridad solo", dijo. "Las políticas de crecimiento no pueden esperar."Sr. Letta, quien ha hecho revertir la política de austeridad de Europa, uno de sus objetivos centrales, dijo que la UE estaba sufriendo una "crisis de legitimidad" y tuvo que volver a ser "un motor de crecimiento económico".</p>
				<p>El primer acto de gobierno, dijo, sería la de dar ejemplo mediante la reducción de los sueldos de los ministros que reciben un segundo ingreso para ser miembros del parlamento.También dijo que la entrega junio programada de un resentido impuesto ampliamente propiedad se detuvo y una reforma del impuesto discutido.</p>
				<p>Un portavoz del PDL, dijo que la medida era "música para nuestros oídos" - la derogación del impuesto era una plataforma importante para la campaña del partido de Berlusconi.</p>
				<p>Mientras tanto, un oficial de policía sigue gravemente enfermo después de recibir un disparo en el cuello el domingo cerca del edificio en el que el nuevo parlamento se estaba juramentación
					Los médicos dijeron que Giuseppe Giangrande, de 50 años, sufrió daños en la médula espinal de un disparo frente a la oficina del primer ministro en el centro de Roma.</p>
					<p>Tenemos comentario de un Italiano sobre los recientes resultados de las elecciones</p>
					<audio controls>
						<source src="opinionItaly.wav" type="audio/wav" preload="auto">
							Your browser does not support the audio tag.
						</audio>
					</section>
					<script type="text/javascript">
					function checkTextArea() {
						if ( $.trim( $('#emptyComment').val() ) == '' ) {
							alert('Los comentarios no pueden estar vacios');
							return false;
						}
					}


					</script>
					<?php
					echo '<section class="leftNewsGrouping">
					<h4>Queremos saber <em>T&uacute;</em> opini&oacute;n</h4>
					<form action="../php/insertCommentary.php" method="post" id="formCommentary">
					<textarea class="viewerOpinion" name="post-text" id="emptyComment" cols="70" rows="5"></textarea>
					<input type="submit" onclick="return(checkTextArea());" placeholder="Insertar Comentarios Aqui..." value="Commentar">
					</form>
					</section>';
					?>
					<?php
					ini_set('display_errors', true);
					error_reporting(E_ALL);

					include_once('../php/Commentary.php');
					$commentary = new Commentary();
					$commentary->connect();
					$commentary->echoDataBase();
					$commentary->close();
					?>
					
				</section>





				<footer>
					<section class="Information">
						<address>C/ Marie Curie #43, Granada, Espa&ntilde;a, 18100</address>
						<p>958718395</p>
						<p>Jos&eacute; Miguel Colella</p>
						<p class="Explanation"><a href="../PeriodicoDigital_JoseMiguelColella.pdf">C&oacute;mo se ha realizado</a></p>
					</section>

					<section class="Subscribe">
						<p><a href="../formularioInscripcion.html">Suscribirse a la versi&oacute;n impresa</a></p>
					</section>

				</footer>
			</section>
		</body>
		</html>
