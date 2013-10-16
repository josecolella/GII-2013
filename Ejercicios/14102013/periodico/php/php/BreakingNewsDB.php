<?php
	/**La clase @link{BreakingNewsDB sirve para proporcionar metodos para
	 * añadir, modificar, y borrar noticias de Ultima hora
	 *
	 * @author Jose Miguel Colella
	 * @version 1.0
	 */
		ini_set('display_errors', true);
		error_reporting(E_ALL);
		include_once('DBInteraction.php');

		class BreakingNewsDB extends DBInteraction
		{

			private $breakingNewsArray = array();
			private $newStory;

		/**
		 * El metodo insertUser inserta un usuario en la base de datos
		 * @return Una fila se ha agregado en la base de datos con el nuevo usuario
		 */
		public function insertStory()
		{

			$sql = "INSERT INTO `BreakingNews`(`News`) VALUES (\" \")";

			$this->connection->query($sql);

		}

		/**
		 * El metodo removeStory borra la noticia que se indica que el parametro
		 * $index
		 * @param  int $index El indice de noticia que se borra
		 * @return La base de datos sin la noticia borrada
		 */
		public function removeStory($index)
		{
			$story = $_POST["$index"];
			$removeStoryQuery = "DELETE FROM `BreakingNews` WHERE `News` = \"$story\"";
			$this->connection->query($removeStoryQuery);
		}

		/**
		 * El metodo deteleAllElements borra todas
		 * las filas de la base de datos
		 *
		 * @return La base de datos vacia
		 */
		public function deleteAllElements()
		{
			//Borramos todos los elementos para despues insertarlos
			$deleteAllElements = 'TRUNCATE TABLE `BreakingNews';

			$result = $this->connection->query($deleteAllElements);
		}

		/**
		 * El metodo modifyStory inserta las
		 * noticias dentro de la base de datos
		 *
		 * @return La base de datos con las noticias insertadas
		 */
		public function modifyStory()
		{

			foreach($_POST as $key => $value) {
				if($value != "") {
					$sql = "INSERT INTO `BreakingNews`(`News`) VALUES (\"$value\")";
					$result = $this->connection->query($sql);
				}

			}

		}
		/**
		 * Metodo usado para ver el contenido de la base de datos
		 * @return La base de datos entera
		 */
		public function echoDataBase()
		{
			$query = "SELECT * FROM `BreakingNews`";

			$result = $this->connection->query($query);
			echo '<section>';
			echo '<form action="" method="post" id="form1">';
			$i = 0;
			while ($row = $result->fetch_assoc())
			{

				foreach($row as $newsStory) {
					echo '<button class="storyNum" type="button" disabled>'.$i.'</button>';
					echo '<textarea name="'.$i.'" class="options" rows="4" cols="100" maxlength="200">'.$newsStory.'</textarea><br/>';

					$i++;
				}
			}

			echo '<p>';
			echo '<label for="numStory" class="label">Elegir que noticia quieres borrar: </label>';
			echo '<input type="text" id="numStory"  class="field" name="numStory" value="" size="4" placeholder="1"/>';
			echo '</p>';
			echo '<p>';
			echo '<small class="notification">Solo se puede añadir una noticia a la vez.<br/>Si quiere que las noticias se guarden usar el boton de modificación</small>';
			echo '</p>';
			echo '<input type="image" onclick="submitForm(\'php/insertStory.php\')" src="./img/add.jpg" alt="Añadir Noticia" title="Añadir Noticia" name="add">';
			echo '<input type="image" onclick="submitForm(\'php/modifyStory.php\')" src="./img/modify.png" alt="Modificar Noticia" title="Modificar Noticia" name="modify">';
			echo '<input type="image" onclick="submitForm(\'php/deleteStory.php\')" src="./img/cancel.jpg" alt="Eliminar Noticia" title="Eliminar Noticia" name="remove">';

			echo'<button type="button" id="FinishButton" onclick="finalize()"/>Finalizar</button>';

			echo '</section>';
			echo '</form>';

		}

		/**
		 * El metodo printBreakingNews imprime las noticias
		 * de ultima hora localizadas en la base de datos.
		 * Se usa en la pagina index.php
		 * @return [type] [description]
		 */
		public function printBreakingNews() {
			$query = "SELECT * FROM `BreakingNews`";

			$result = $this->connection->query($query);
			while ($row = $result->fetch_assoc())
			{

				foreach($row as $newsStory) {
					echo '<article class="newsStory">';
					echo '<p><strong>'.$newsStory.'</strong></p>';
					echo '</article>';

				}
			}

		}

	}


	?>