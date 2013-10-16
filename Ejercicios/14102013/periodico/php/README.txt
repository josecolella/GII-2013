-Ya los usuarios se puede insertar en la Base de datos. Y ademas creando la clase abstracta 
DBInteraction, he modularizado las cosas, separando lo que tienen que hacer las clases

			Estructura de Clases
_________________________________________________________________________
									|
			DBInteraction					|
				|					|
				|					|
	________________________|_______________________		|
	|			|			|		|			
	|			|			|		|			
	|			|			|		|				
 UserVerification	BreakingNewsDB		Commentary		|	
									|
________________________________________________________________________|
									|
 									|
			UserVerification				|
				|					|
				|					|
	________________________|_______________________		|
	|						|		|		
	|						|		|		
	|						|		|			
 insertUser.php		  SignIn.php			LogOut.php	|
									|			
________________________________________________________________________|
									|
			BreakingNewsDB					|
				|					|
				|					|
	________________________|_______________________		|
	|						|		|			
	|						|		|			
	|						|		|				
 insertStory.php	 modifyStory.php		deleteStory.php |
									|
________________________________________________________________________|
									|
			Commentary					|
                           |						|
			   |						|
		   insertCommentary.php					|
									|
________________________________________________________________________|




