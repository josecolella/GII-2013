<?php
	//Revisar que solo el administrador pueda ver esta pagina
session_start();
?>
<!DOCTYPE HTML>
<!--Este fichero contiene la portada del periodico-->
<html lang="ES">
<head>
	<!--En esta sección insertamos la parte sem&aacute;ntica del documento, como tipo de caracteres usados, el titulo, etc -->
	<title>Pagina de Administraci&oacute;n</title>
	<meta charset="UTF-8"/>
	<meta name="Application-Name" content="The Granada Post"/>
	<meta name="Author" content="Jose Miguel Colella"/>
	<meta name="Description"content="En esta pagina el administrador se encarga de gestionar las noticias de ultima hora, borrando, actualizandolas o añadiendo nuevas">
	<meta name="Content-Language" content="es-ES"/>
	<script src="js/submitForm.js"></script>
	<!--Declaramos que se usar&aacute; un fichero css para describir la presentaci&oacute;n de la portada -->
	<link rel="stylesheet" type="text/css" href="css/adminPage.css">
	<link href='http://fonts.googleapis.com/css?family=Rye' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arbutus+Slab&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAB6fm8AcYd4AC4qIgCZjnoA3+bcAPT49gDg6t8AMi4lAPn5+QBWW1kASUQ5ALamlABgXkcAem1YAPz9/ACDblsAiIqKAFtoZQDu9+sA2eLaAHp8agCDelsA2uDdAIt3ZAC2vLsAc2lWALm9vgBzkIIAztXPAPn8+gB3b1YApZZ4AOXu4wCSnpkAeW5cAGZcSwCKh3kADwwKAHt0XACzwJIAwcvEABEQDQCZpZwAq8WzALO6tgBfcWYApKucAOLl5ACkr6gA+/z7AGJbSQBXYVsArK6uAD0yKgA4PC0ANTw2AKGycwDW4NYA2N7ZABMTDgDy8/MAFhcRAEQ+MwDJzs4AcWhVAHVrVQBncG0ARkY5AEtCNgD8/PwADwsJAL/LvQCqvaYAh4qEAO3w6wBsX00AVVQ/ANzi3QCuo4YA3OfaAJ6opwCKl5AAjJeQAJq2pADg5OMAytTPAHmFfwDh6eAAtauDAIKBfADQ2s8A0NjSACAfGADR29IAp7atAKqYeADX4M8AepyOAFZKPQCdn58Ag3JiAJulnwBBPC8AxdXBAEFAMgBxYVQAVVhDAAICAgCGemgAuLu8ABgZGQDi6eEAd2hXAPj6+AB1bVQAusK/AOTq5AAhGxYAd2xaAJOflwA2NCoAvMy5AIeGegCYn44ANzQqANHZ1gBkW0wAgY+DACQiGQAPDgsAbV5MABESDgDu8+0Aw9S/ABMVDgDa4dwAyMvIAMjMywDw9/AAmLWaALDBtAD2+fYAo7CmAPj6+QCisakAd2pVAIx+bABOQTYAqa6pAIBpUgDR3NcARU5LAH9sWwC9ycMATkw8AP///wCXoJsAgZKEAMLGwwCZoZ4AZ2JQAKfAsgCao5sAoKOSAJykngDF0cAAKScgACsnIACbqp4AhXphAFxOQgDKz8wAytLMAC8sJgC4wLsAzdjMAPn6+gCMo5MAkn5kAE5ENwDLu6wA0t3SADo8KQB8cmUAbF1LANjk1QDw8fIAFhUQAJ+oogC1ubkALS8nAFpYRgDh6+EARUc4AKWsrgDR19MAIR4ZAE9FOwBmWUkAfGxdAOnw5wA7OSoA1d/ZAG57eACxtLQAVE8+ALK3tADv8/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAm5ubm5s0zokzxMybm5ubm5ubm22uc45Exxdkxb2bm5ubm5dRtY+TC4J5rSK8EZubmxifV0e+tEtnOEhMfneIm5sIhzpdI3ASyIU5Apg8nJsapGNmFXazdUa7bgIPMGXDy4YHzU/GlHQuaslDoyg/UkIlSa8FQB2NhBMsfLgvISo7PU2lMXIgDrkGtg0ylcJQgHgQWm+SWWDPa79xaFjAVp4+CqYJYsEpmjVFVJlft1ubopFsA2mqQRmWsIqdHySbm6terHt6oAw3ypC6XLIWm5ubLX+MqH0ApzaDgSZOm5ubm5scsSeLK6EUHqlKm5ubm5ubm5tVAVNhGwSbm5ubmwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
</head>
<script>
function finalize()
{
	location.href='./index.php';
}
</script>

<body>
	<section id="newspaper">
		<header>
			<h1><a href="index.html">The Granada Post</a></h1>
			<h3>P&aacute;gina de Administraci&oacute;n</h3>
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
				<noscript>
					Tu navegador no soporta JavaScript
				</noscript>
			</header>
			<?php
			ini_set('display_errors', true);
			error_reporting(E_ALL);
			include_once('php/BreakingNewsDB.php');
			$breakingNews = new BreakingNewsDB();
			$breakingNews->connect();
			$breakingNews->echoDataBase();
			$breakingNews->close();


			?>
		</section>
	</body>
	</html>
