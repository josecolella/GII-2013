<?php

			//ini_set('display_errors', true);
			//error_reporting(E_ALL);
			include_once('DBInteraction.php');

		/**
		 * La clase de Commentary gestiona todo relacionado
		 * con los comentarios de la noticia destacada de la sección
		 *
		 * @author Jose Miguel Colella <josecolella@correo.ugr.es>
		 * @version 1.0
		 */
		class Commentary extends DBInteraction
		{
			/**
			 * El metodo de insertComentary inserta el comentario
			 * que esta compuesto por el nombre de usuario, fecha y tiempo del
			 * comentario, y texto del comentario
			 *
			 * @param  string $username       Nombre de Usuario
			 * @param  dateTime $dateT          Tiempo cuando se hizo el comentario
			 * @param  string $commentaryText El texto del comentario
			 * @return Comentario agregado en la base de datos
			 */
			public function insertCommentary($username,$dateT,$commentaryText)
			{
				// "INSERT INTO `x1453965`.`Commentary` (`username`, `dateT`, `commentaryText`) VALUES (\'josecolella\', \'2013-06-18 05:26:31\', \'Hello\');";
				$insertSQL = "INSERT INTO `Commentary`(`username`, `dateT`, `commentaryText`) VALUES (\"$username\",\"$dateT\",\"$commentaryText\")";
				$result = $this->connection->query($insertSQL);
			}


		/**
		 * Metodo usado para ver el contenido de la base de datos
		 * @return La base de datos entera
		 */
		public function echoDataBase()
		{
			$query = "SELECT * FROM `Commentary`";

			$result = $this->connection->query($query);

			while ($row = $result->fetch_assoc())
			{
				echo '<section class="leftNewsGrouping">';
				echo '<article class="oldCommentary">';
				echo '<p><strong>Comentario: </strong></p>';
				echo '<p>Usuario: '.$row["username"].'</p>';
				echo '<p>Día y hora: '.$row["dateT"].'</p>';
				echo '<p><em>'.$row["commentaryText"].'</em></p>';
				echo '</article>';
				echo '</section>';

			}
		}


	}



	?>