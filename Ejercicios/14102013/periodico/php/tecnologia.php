<?php 
session_start();
?>
<!DOCTYPE HTML>
<html lang="ES">
<head>
	<meta charset="UTF-8"/>
	<meta name="Author" content="Jose Miguel Colella"/>
	<meta name="Description"content="En esta pagina se declara el contenido de la seccion del periodico">
	<meta name="Content-Language" content="es-ES"/>
	
	<title>Internacional: Noticias del todo el mundo</title>
	
	<!--Declaramos que se usar&aacute; un fichero css para describir la presentaci&oacute;n de la portada -->
	<link rel="stylesheet" type="text/css" href="css/sectionsPage.css">
	<link href='http://fonts.googleapis.com/css?family=Rye' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arbutus+Slab&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAB6fm8AcYd4AC4qIgCZjnoA3+bcAPT49gDg6t8AMi4lAPn5+QBWW1kASUQ5ALamlABgXkcAem1YAPz9/ACDblsAiIqKAFtoZQDu9+sA2eLaAHp8agCDelsA2uDdAIt3ZAC2vLsAc2lWALm9vgBzkIIAztXPAPn8+gB3b1YApZZ4AOXu4wCSnpkAeW5cAGZcSwCKh3kADwwKAHt0XACzwJIAwcvEABEQDQCZpZwAq8WzALO6tgBfcWYApKucAOLl5ACkr6gA+/z7AGJbSQBXYVsArK6uAD0yKgA4PC0ANTw2AKGycwDW4NYA2N7ZABMTDgDy8/MAFhcRAEQ+MwDJzs4AcWhVAHVrVQBncG0ARkY5AEtCNgD8/PwADwsJAL/LvQCqvaYAh4qEAO3w6wBsX00AVVQ/ANzi3QCuo4YA3OfaAJ6opwCKl5AAjJeQAJq2pADg5OMAytTPAHmFfwDh6eAAtauDAIKBfADQ2s8A0NjSACAfGADR29IAp7atAKqYeADX4M8AepyOAFZKPQCdn58Ag3JiAJulnwBBPC8AxdXBAEFAMgBxYVQAVVhDAAICAgCGemgAuLu8ABgZGQDi6eEAd2hXAPj6+AB1bVQAusK/AOTq5AAhGxYAd2xaAJOflwA2NCoAvMy5AIeGegCYn44ANzQqANHZ1gBkW0wAgY+DACQiGQAPDgsAbV5MABESDgDu8+0Aw9S/ABMVDgDa4dwAyMvIAMjMywDw9/AAmLWaALDBtAD2+fYAo7CmAPj6+QCisakAd2pVAIx+bABOQTYAqa6pAIBpUgDR3NcARU5LAH9sWwC9ycMATkw8AP///wCXoJsAgZKEAMLGwwCZoZ4AZ2JQAKfAsgCao5sAoKOSAJykngDF0cAAKScgACsnIACbqp4AhXphAFxOQgDKz8wAytLMAC8sJgC4wLsAzdjMAPn6+gCMo5MAkn5kAE5ENwDLu6wA0t3SADo8KQB8cmUAbF1LANjk1QDw8fIAFhUQAJ+oogC1ubkALS8nAFpYRgDh6+EARUc4AKWsrgDR19MAIR4ZAE9FOwBmWUkAfGxdAOnw5wA7OSoA1d/ZAG57eACxtLQAVE8+ALK3tADv8/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAm5ubm5s0zokzxMybm5ubm5ubm22uc45Exxdkxb2bm5ubm5dRtY+TC4J5rSK8EZubmxifV0e+tEtnOEhMfneIm5sIhzpdI3ASyIU5Apg8nJsapGNmFXazdUa7bgIPMGXDy4YHzU/GlHQuaslDoyg/UkIlSa8FQB2NhBMsfLgvISo7PU2lMXIgDrkGtg0ylcJQgHgQWm+SWWDPa79xaFjAVp4+CqYJYsEpmjVFVJlft1ubopFsA2mqQRmWsIqdHySbm6terHt6oAw3ypC6XLIWm5ubLX+MqH0ApzaDgSZOm5ubm5scsSeLK6EUHqlKm5ubm5ubm5tVAVNhGwSbm5ubmwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
	
</head>
<body>
	<script type="text/javascript">
	var changeImage = function(newSrc) {
		var img = document.getElementById('arrow');
		img.src = newSrc;
	}
	</script>
	<noscript>
		Tu navegador no soporta JavaScript
	</noscript>
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

			<section class="sectionName">
				<h2 class="creamSection">Tecnolog&iacute;a</h2>
			</section>
			<section class="highlightedStory">
				<h3 class="creamSection"><a href="internacional/Compromiso_llegado_creacion_gobierno_20130427.php">Nuevo Gobierno en Italia</a></h3>
				<p class="author">Escrito por Sergio Gonzalez</p>
				<figure>
					<img src="internacional/Compromiso_llegado_creacion_gobierno_20130427.png" alt="Primer Ministro de Italia, Enrico Letta"/>
					<figcaption>Enrico Letta recibió una ovación de pie de los miembros de la coalición después de su discurso inaugural.</figcaption>
				</figure>
				<p>Líder del Partido Democrático adjunto (<abbr title="Partito Democratico">PD</abbr>), Enrico Letta, se convierte en primer ministro al frente de una "gran coalición" como partido Pueblo de la Libertad (<abbr title="Popolo della Liberta">PDL</abbr>) de Silvio Berlusconi. Entre otros nombramientos clave propuestos, el Banco de Italia director general Fabrizio Saccomanni encabezará el Ministerio de Economía potente y ex comisario europeo Emma Bonino se convertirá en ministro de Relaciones Exteriores...</p>
			</section>
			<section id="rightNewsGrouping">
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
					<aside>
						<a href="https://internetweekny.com/orders">
							<img src="img/anunciospublicitarios4.png" alt="Anuncio Publicitario"/>
						</a>
					</aside>
					<aside>
						<a href="http://goo.gl/UpWPL">
							<img src="img/anunciospublicitarios5.png" alt="Anuncio Publicitario"/>
						</a>
					</aside>
				</section>
			</section>

			<section id="leftNewsGrouping">
				<article class="newsStory">
					<h3 class="headline creamSection">Madre Boston bombardeo sospechosos lamenta la emigración a EE.UU.</h3>
					<p class="author">Escrito por Cristina Calero</p>
					<figure>
						<img src="internacional/Madre_Boston_lamenta_emigracionUS_20130425.png" alt="Foto de la madre del terrorista del maraton de Boston"/>
						<figcaption>Zubeidat Tsarnaeva: "Estados Unidos me ha quitados mis hijos"</figcaption>
					</figure>
					<p>La madre de los sospechoss de los atentados del maratón de Boston dice que lamenta que la familia emigró a los EE.UU., hace más de 10 años...</p>
				</article>
				<article class="newsStory">
					<h3 class="headline creamSection">Elecciones en Islandia</h3>
					<p class="author">Juancho Pancho</p>
					<p>Partidos de la oposición de centro-derecha en Islandia se establecen para un retorno al poder con todos los votos contados después de las elecciones parlamentarias del sábado....</p>
				</article>
				
				<article class="newsStory">
					<h3 class="headline creamSection">Los muertos en Bangladesh pasan 400</h3>
					<p class="author">Escrito por Luis Ruiz</p>
					<p>El número de personas que murieron en el derrumbe de un edificio en Bangladesh que albergaba fábricas de ropa la semana pasada ha pasado de 400, dijeron funcionarios....</p>
				</article>
				<article class="newsStory">
					<h3 class="headline creamSection">H7N9, virus aviario es una "amenaza grave" - advierten investigadores</h3>
					<p class="author">Escrito por Zhou NiMa</p>
					<p>Of the 126 people known to be infected so far, 24 have died, with many more still severely ill in hospital.</p>
					<p>The H7N9 virus has not, however, yet proved able to spread between people - which limits its global threat....</p>
				</article>

			</section>
			<section id="centerNewsGrouping">
				<article class="newsStory">
					<h3 class="headline creamSection">Barack Obama dice prisión de Guantánamo debe cerrarse</h3>
					<p class="author">Escrito por Jos&eacute; Colella</p>
					<figure>
						<img src="internacional/US_cerrar_prision_Guantanamo_20130430.png" alt="Presidentes de los Estados Unidos, Barack Obama">
						<figcaption>Presidente Obama: "Guantánamo no es necesario para mantener seguro a Estados Unidos ... es una herramienta de reclutamiento para los extremistas, sino que necesita ser cerrado"</figcaption>
					</figure>
					<p>El presidente Barack Obama ha prometido un nuevo impulso para cerrar la prisión de Guantánamo, en Cuba, en medio de una creciente huelga de hambre prisionero allí...</p>
				</article>
				<article class="newsStory">
					<h3 class="headline creamSection">Una niña de cinco años de edad muere en la region de India Madhya Pradesh</h3>
					<p class="author">Escrito por Apu Nahal</p>
					<p>Una niña de cinco años de edad, ha muerto dos semanas después de haber sido violada en el estado central indio de Madhya Pradesh.</p>
					<p>La niña falleció el lunes por la noche, dijo el hospital en la ciudad de Nagpur, donde estaba siendo tratada.....</p>
				</article>
				<article class="newsStory">
					<h3 class="headline creamSection">Islamista francés capturado 'después de luchar "en Malí</h3>
					<p class="author">Escrito por Muhammed Abel</p>
					<p>Un converso islámico francés que amenazó a su país de origen ha sido capturado en el norte de Malí, al parecer después de haber luchado en el lado de los militantes.</p>

					<p>Las tropas francesas capturaron Gilles Le Guen, que ahora se conoce con el nombre de Abdel Jelil, la noche del domingo al norte de Tombuctú, dijo el ejército...</p>
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
