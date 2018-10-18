<?php  
	class Enlaces{
		public function paginasModel($enlacesModel){
			if($enlacesModel=="registrarAlumno" || $enlacesModel=="registrarTutor"){
				$module = $_SESSION['tipo']."/".$enlacesModel.".php";
			}
			else{
				$module = $_SESSION['tipo']."/inicio.php";		
			}
			return $module;
		}
	}
?>