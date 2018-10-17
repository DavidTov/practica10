<?php 
	
	// Se manda llamar al archivo que contiene la clase connection con el método conectar
	// el cual se conecta a la base de datos
	require_once "connection.php";


	class paginas{

		function enlacesPaginasModel($enlace){

			if($enlace == "index" || $enlace==""){
				$respuestaModel = "views/modules/iniciarSesion.php";
			}
			return $respuestaModel;
		}
	}// fin class datos


 ?>