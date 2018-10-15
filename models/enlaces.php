<?php 
	
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