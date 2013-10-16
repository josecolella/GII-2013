<?php
session_start();

?>
<!DOCTYPE HTML>
<html lang="ES">
<head>
	<!--En esta sección insertamos la parte sem&aacute;ntica del documento, como tipo de caracteres usados, el titulo, etc --> 
	<title>The Granada Post: Todas las noticias en un lugar</title>
	<meta name="Application-Name" content="The Granada Post"/>
	<meta name="Author" content="Jose Miguel Colella"/>
	<meta name="Description"content="En esta pagina se declara el contenido de la portada del periodico, y usaremos un fichero CSS para denotar su presentaci&oacute;n al usuario">
	<meta name="Content-Language" content="es-ES"/>
	<meta charset="UTF-8"/>
	<!--Declaramos que se usar&aacute; un fichero css para describir la presentaci&oacute;n de la portada -->
	<link rel="stylesheet" type="text/css" href="css/mainPage.css">
	<link href='http://fonts.googleapis.com/css?family=Rye' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arbutus+Slab&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAB6fm8AcYd4AC4qIgCZjnoA3+bcAPT49gDg6t8AMi4lAPn5+QBWW1kASUQ5ALamlABgXkcAem1YAPz9/ACDblsAiIqKAFtoZQDu9+sA2eLaAHp8agCDelsA2uDdAIt3ZAC2vLsAc2lWALm9vgBzkIIAztXPAPn8+gB3b1YApZZ4AOXu4wCSnpkAeW5cAGZcSwCKh3kADwwKAHt0XACzwJIAwcvEABEQDQCZpZwAq8WzALO6tgBfcWYApKucAOLl5ACkr6gA+/z7AGJbSQBXYVsArK6uAD0yKgA4PC0ANTw2AKGycwDW4NYA2N7ZABMTDgDy8/MAFhcRAEQ+MwDJzs4AcWhVAHVrVQBncG0ARkY5AEtCNgD8/PwADwsJAL/LvQCqvaYAh4qEAO3w6wBsX00AVVQ/ANzi3QCuo4YA3OfaAJ6opwCKl5AAjJeQAJq2pADg5OMAytTPAHmFfwDh6eAAtauDAIKBfADQ2s8A0NjSACAfGADR29IAp7atAKqYeADX4M8AepyOAFZKPQCdn58Ag3JiAJulnwBBPC8AxdXBAEFAMgBxYVQAVVhDAAICAgCGemgAuLu8ABgZGQDi6eEAd2hXAPj6+AB1bVQAusK/AOTq5AAhGxYAd2xaAJOflwA2NCoAvMy5AIeGegCYn44ANzQqANHZ1gBkW0wAgY+DACQiGQAPDgsAbV5MABESDgDu8+0Aw9S/ABMVDgDa4dwAyMvIAMjMywDw9/AAmLWaALDBtAD2+fYAo7CmAPj6+QCisakAd2pVAIx+bABOQTYAqa6pAIBpUgDR3NcARU5LAH9sWwC9ycMATkw8AP///wCXoJsAgZKEAMLGwwCZoZ4AZ2JQAKfAsgCao5sAoKOSAJykngDF0cAAKScgACsnIACbqp4AhXphAFxOQgDKz8wAytLMAC8sJgC4wLsAzdjMAPn6+gCMo5MAkn5kAE5ENwDLu6wA0t3SADo8KQB8cmUAbF1LANjk1QDw8fIAFhUQAJ+oogC1ubkALS8nAFpYRgDh6+EARUc4AKWsrgDR19MAIR4ZAE9FOwBmWUkAfGxdAOnw5wA7OSoA1d/ZAG57eACxtLQAVE8+ALK3tADv8/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAm5ubm5s0zokzxMybm5ubm5ubm22uc45Exxdkxb2bm5ubm5dRtY+TC4J5rSK8EZubmxifV0e+tEtnOEhMfneIm5sIhzpdI3ASyIU5Apg8nJsapGNmFXazdUa7bgIPMGXDy4YHzU/GlHQuaslDoyg/UkIlSa8FQB2NhBMsfLgvISo7PU2lMXIgDrkGtg0ylcJQgHgQWm+SWWDPa79xaFjAVp4+CqYJYsEpmjVFVJlft1ubopFsA2mqQRmWsIqdHySbm6terHt6oAw3ypC6XLIWm5ubLX+MqH0ApzaDgSZOm5ubm5scsSeLK6EUHqlKm5ubm5ubm5tVAVNhGwSbm5ubmwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
</head>
<body>
	<script type="text/javascript">
	function validateUser() {
		var username = document.getElementById('UserName').value;
		var password = document.getElementById('Password').value;

		if(username == null || username == ""){
			alert("Campo [Nombre de Usuario] no puede esta vacio");
			document.getElementById('UserName').focus();
			return false;
		}
		if(password == null || password == ""){
			alert("Campo [Contraseña] no puede estar vacio");
			document.getElementById('Password').focus();
			return false;
		}
	}
	</script>
	<noscript>
		Tu navegador no soporta JavaScript
	</noscript>
	<script type="text/javascript">
	var changeImage = function(newSrc) {
		var img = document.getElementById('arrow');
		img.src = newSrc;
	}
	</script>
	<aside id="publicity">
		<aside class="toppublicity">
			<a href="http://www.mensfashiondepot.com/">
				<img src="img/HorizontalAd.jpg" alt="publicidad" height="90" width="1000"/>
			</a>
		</aside>
		<aside class="rightpublicity">
			<a href="http://ifaw.org">
				<img src="img/vertical_ad.png" alt="publicidad" height="600" width="120"/>
			</a>
		</aside>
		<aside class="leftpublicity">
			<a href="http://buysellads.com/">
				<img src="img/vertical_ad2.png" alt="publicidad" height="600" width="120"/>
			</a>
		</aside>
	</aside>




	<section id="newspaper">
		<header>
			<h1><a href="index.php">The Granada Post</a></h1>
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
						echo '<a href="admin.php">Administraci&oacute;n</a>';
						echo '</li>';
					}
					echo '<li>';
					echo '<form action="php/LogOut.php" method="post">';
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
					echo '<a href="formularioDiario.html">Registrarse</a>';
					echo '</li>';
					echo '<li>';
					echo '<a href="#">Iniciar Sesi&oacute;n <img src="./img/right-arrow.png" alt="right arrow" onmouseover="changeImage(\'./img/down-arrow.png\')" onmouseout="changeImage(\'./img/right-arrow.png\')" id="arrow"/></a>';
					echo '<ul>';
					echo '<li>';
					echo '<form action="php/SignIn.php" onsubmit="return(validateUser())" method="post">';
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
						<li class="selected"><a class="blueSection" href="noticiaslocales.php">Noticias Locales</a></li>
						<li class="selected"><a class="redSection" href="internacional.php">Internacional</a></li>
						<li class="selected"><a class="greenSection" href="economia.php">Econom&iacute;a</a></li>
						<li class="selected"><a class="creamSection" href="tecnologia.php">Tecnolog&iacute;a</a></li>
					</ul>
				</nav>
			</section>


			<section id="rightNewsGrouping">
				<section class="breakingNews">
					<h2>&Uacute;ltimas Noticias</h2>
					<?php
					ini_set('display_errors', true);
					error_reporting(E_ALL);
					include_once('php/BreakingNewsDB.php');
					$breakingNews = new BreakingNewsDB();
					$breakingNews->connect();
					$breakingNews->printBreakingNews();
					$breakingNews->close();

					?>
				</section>

				<section class="smallAds"> 
					<aside>
						<a href="http://can-moveit.com">
							<img src="img/anunciospublicitario3.png" alt="Anuncio Publicitario"/>
						</a>
					</aside>
					<aside>
						<a href="http://gfi.com/web-monitor">
							<img src="img/anunciospublicitarios.png" alt="Anuncio Publicitario"/>
						</a>
					</aside>
					<aside>
						<a href="http://can-moveit.com">
							<img src="img/anunciospublicitarios2.png" alt="Anuncio Publicitario"/>
						</a>
					</aside>
				</section>
			</section>

			<section id="leftNewsGrouping">
				<article class="newsStory">
					<h3 class="headline redSection"><a href="internacional/Compromiso_llegado_creacion_gobierno_20130427.php">Nuevo Gobierno en Italia</a></h3>
					<p class="author">Escrito por Sergio Gonzalez</p>
					<figure>
						<img src="internacional/Compromiso_llegado_creacion_gobierno_20130427.png" alt="Primer Ministro de Italia, Enrico Letta"/>
						<figcaption>Enrico Letta recibió una ovación de pie de los miembros de la coalición después de su discurso inaugural.</figcaption>
					</figure>
					<p>Líder del Partido Democrático adjunto (<abbr title="Partito Democratico">PD</abbr>), Enrico Letta, se convierte en primer ministro al frente de una "gran coalición" como partido Pueblo de la Libertad (<abbr title="Popolo della Liberta">PDL</abbr>) de Silvio Berlusconi...</p>
				</article>
				<article class="newsStory">
					<h3 class="headline blueSection"><a href="internacional/Compromiso_llegado_creacion_gobierno_20130427.php">&iquest;Es austeridad la mejor opci&oacute;n para Espa&ntilde;a?</a></h3>
					<p class="author">Escrito por Alvaro Moreno</p>
					<p>Tome el Presidente José Manuel Barroso de la Comisión Europea. La Comisión se ve en algunas partes de Europa como el sumo sacerdocio de austeridad - más incluso que el Fondo Monetario Internacional - pero el señor Barroso dijo lo siguiente: "Aunque creo que esta política es fundamentalmente correcto, creo que ha llegado a su límite . "...</p>
				</article>
				<article class="newsStory">
					<h3 class="headline creamSection"><a href="internacional/Compromiso_llegado_creacion_gobierno_20130427.php">Red 3G construido en Corea del Norte</a></h3>
					<p class="author">Escrito por I&ntilde;aki Serrano</p>
					<figure>
						<img src="tecnologia/3G_establecido_Korea_Norte_20130426.png" alt="Estatua de Kim Jong Un">
						<figcaption>Corea del Norte no puede acceder a Internet a través de 3G en sus teléfonos</figcaption>
					</figure>
					<p>Casi dos millones de norcoreanos no utilizar sólo la red 3G del país, <a href="http://goo.gl/IpnDP">informa un blog dedicado a noticias sobre tecnología en Corea del Norte</a>....</p>
				</article>
				<article class="newsStory">
					<h3 class="headline greenSection"><a href="internacional/Compromiso_llegado_creacion_gobierno_20130427.php">Economía de EE.UU. crece 2,5% en el gasto de consumo boyante</a></h3>
					<p class="author">Escrito por Fernando Lopez</p>
					<p>La economía de EE.UU. creció a un ritmo anual del 2,5% en los tres primeros meses del año, ayudado por las fuertes cifras de gasto de los consumidores en dos años...</p>
				</article>
				<article class="newsStory">
					<h3 class="headline blueSection"><a href="internacional/Compromiso_llegado_creacion_gobierno_20130427.php">El fin de la crisis se retrasa a 2016</a></h3>
					<p class="author">Escrito por Anna Marina</p>
					<p>España tendrá dos años más para reducir el déficit público hasta el 3% del PIB, tras una negociación con Bruselas que se salda con otra subida de impuestos, con otra andanada de recortes, con otro empujón a las reformas estructurales pendientes. El ajuste presupuestario...</p>
				</article>

			</section>
			<section id="centerNewsGrouping">
				<article class="newsStory">
					<h3 class="headline creamSection"><a href="internacional/Compromiso_llegado_creacion_gobierno_20130427.php">Cern recrear primera página Web para venerar principios ideales</a></h3>
					<p class="author">Escrito por Patxi Hernandez</p>
					<figure>
						<img src="tecnologia/Cern_primera_pagina_web_20140430.png" alt="Foto del internet"/>
						<figcaption>Perdido en el mundo: La primera página web. En ese momento, pocos imaginaron que el internet ser&iacute; tan ubicuo hoy en d&iacute;a.</figcaption>
					</figure>
					<p>El objetivo es preservar el hardware y el software asociado con el nacimiento de la web original.La World Wide Web fue desarrollado por el profesor Sir Tim Berners-Lee, mientras trabajaba en el CERN.</p>
					<p>La iniciativa coincide con el 20 aniversario del centro de investigación que da la web para el mundo....</p>
				</article>


				<article class="newsStory">
					<h3 class="headline redSection"><a href="internacional/Compromiso_llegado_creacion_gobierno_20130427.php">Madre Boston bombardeo sospsos lamenta la emigración a EE.UU.</a></h3>
					<p class="author">Escrito por Cristina Calero</p>
					<figure>
						<img src="internacional/Madre_Boston_lamenta_emigracionUS_20130425.png" alt="Foto de la madre del terrorista del maraton de Boston"/>
						<figcaption>Zubeidat Tsarnaeva: "Estados Unidos me ha quitados mis hijos"</figcaption>
					</figure>
					<p>La madre de los sospss de los atentados del maratón de Boston dice que lamenta que la familia emigró a los EE.UU., hace más de 10 años...</p>
				</article>

				<article class="newsStory">
					<h3 class="headline greenSection"><a href="internacional/Compromiso_llegado_creacion_gobierno_20130427.php">Crecimiento del sector manufacturero de China se desacelera en Abr&iacute;l</a></h3>
					<p class="author">Escrito por Maria Hahm</p>
					<figure>
						<img src="economia/China_decelerar_sector_productor_20130501.png" alt="Foto de una industria manufacturara"/>
						<figcaption>Sectores de producción y de exportación han sido factores clave del crecimiento económico de China en los últimos años</figcaption>
					</figure>
					<p>China, la segunda mayor economía del mundo, se ha basado en gran medida en su sector exportador que ha impulsado su crecimiento económico....</p>
				</article>
			</section>



			<footer>
				<section class="Information">
					<address>C/ Marie Curie #43, Granada, Espa&ntilde;a, 18100</address>
					<p>958718395</p>
					<p>Jos&eacute; Miguel Colella</p>
					<p class="Explanation"><a href="PeriodicoDigital2_JoseMiguelColella.pdf">C&oacute;mo se ha realizado</a></p>
				</section>

				<section class="Subscribe">
					<p><a href="formularioInscripcion.html">Suscribirse a la versi&oacute;n impresa</a></p>
				</section>	
			</footer>
		</section>

	</body>
	</html>
