<?php  

	// Clase Enlaces
	class Enlaces{

		// método paginasModel, el cual retorna los archivos que se han de incluir dependiendo del
		// parámetro que se le pase
		public function paginasModel($enlacesModel){			
			// REGISTRO (ADMINISTRATOR)
			if($enlacesModel=="registrarAlumno" || $enlacesModel=="registrarTutor" || $enlacesModel=="registrarCarrera"){
				// Se concatena el tipo y el enlace más la extensión .php
				$module = $_SESSION['tipo']."/".$enlacesModel.".php";
			}

			// VER (ADMINISTRATOR)
			else if($enlacesModel=="verAlumnos" || $enlacesModel=="verTutores" || $enlacesModel=="verCarreras"){
				// Se concatena el tipo y el enlace más la extensión .php
				$module = $_SESSION['tipo']."/".$enlacesModel.".php";
			}
			else{
				$module = $_SESSION['tipo']."/inicio.php";		
			}

			// Retorna el archivo que se habrá de incluir
			return $module;
		}
	}
?>