<?php 

	class controller{

		function enlacesPaginasController(){
			if(isset($_GET["action"])){
				$enlace = $_GET["action"];
			}else{
				$enlace = "index";
			}


			$respuestaEnlace = datos::enlacesPaginasModel($enlace);

			include $respuestaEnlace;
		}
	}

 ?>