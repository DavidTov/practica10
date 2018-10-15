<?php 

	class controller{

		function enlacesPaginasController(){
			if(isset($_GET["action"])){
				$enlace = $_GET["action"];
			}else{
				$enlace = "index";
			}


			$respuestaEnlace = paginas::enlacesPaginasModel($enlace);

			include $respuestaEnlace;
		}
	}

 ?>