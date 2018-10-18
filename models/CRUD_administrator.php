<?php 
	
	include_once "connection.php";

	/* Clase que maneja los datos */
	class administrator{


		#GENERAL--------------------------------------------------
			#--------------------------------
		// Método que trae los datos de una tabla en específico ($table)
		function getAllModel($table){
			//Consulta 	sql
			$sql = "SELECT * FROM $table";

			// Se pasa la consulta como parámetro del método prepare del PDOStatement Object
			$stmt = connection::conectar()->prepare($sql);

			// Se ejecuta la sentencia
			$stmt->execute();

			// Se almacena en un array los registros encontrados
			$respuestaModel = $stmt->fetchAll();

			// Si el array no es vacío, lo retorna, caso contrario retorna false
			if($respuestaModel){ return $respuestaModel; }
			else { return false; }

		}



		
		#CARRERAS ------------------------------------------------
		 #-----------------------------------
		// Método que agrega carreras
		function addCarreraModel($nombreCarrera){			
			// Sentencia sql
			$sql = "INSERT INTO carreras (nombreCarrera) VALUES (?)";

			// Se pasa la consulta como parámetro del método prepare
			$stmt = connection::conectar()->prepare($sql);

			// Se ejecuta la sentencia
			// Si se ejecuta con éxito retorna true, caso contrario false
			if($stmt->execute([$nombreCarrera])){ return true; }
			else { return false; }
		}


		//Método que modifica carrera
		function updateCarreraModel($id_carrera, $nombreCarrera){
			// consulta sql
			$sql = "UPDATE carreras SET nombreCarrera=? WHERE id=?";

			// Se pasa la consulta con el método prepare
			$stmt = connection::conectar()->prepare($sql);

			// Se ejecuta y se verifica si se ejecutó con éxito (true)
			if($stmt->execute([$nombreCarrera, $id_carrera])){ return true; }
			else { return false; }
		}


		// Método que elimina carreras
		function deleteCarreraModel($id_carrera){
			// Consulta sql
			$sql = "DELETE FROM carreras WHERE id=?";

			// Se pasa la consulta como parámetro del método prepare
			$stmt = connection::conectar()->prepare($sql);

			// Se ejecuta la consulta y se devuelve true si se realizó con éxito
			if($stmt->execute([$id_carrera])){ return true; }
			else{ return false; }
		}



		#MAESTROS - TUTORES ------------------------------------------------
			#-------------------------------------------
		// Método para agregar maestros
		function addTeacherModel($nombreMaestro, $carrera, $email, $password, $foto){
			// Sentencia sql
			$sql = "INSERT INTO maestros (nombreMaestro,carrera,email,password,foto) VALUES (?,?,?,?,?)";

			// Se pasa la consulta como parámetro del método prepare
			$stmt = connection::conectar()->prepare($sql);

			// Se ejecuta la sentencia. Si se ejecuta con éxito retorna true, caso contrario false
			if($stmt->execute([$nombreMaestro, $carrera, $email, $password, $foto])){ return true; }
			else { return false; }
		}


		// Método para agregar alumnos
		function addStudentModel($nombre, $nombreCarrera, $nombreMaestro){
			//Sentencia sql
			$sql = "INSERT INTO alumnos (nombre,carrera,maestro) VALUES (?,?,?)";

			// Se pasa la sentencia como parámetro del método prepare
			$stmt = connection::conectar()->prepare($sql);

			// Se ejecuta la sentencia. Si se ejecuta con éxito retorna true, caso contrario false
			if($stmt->execute([$nombre, $nombreCarrera, $nombreMaestro])){ return true; }
			else { return false; }
		}

	}// fin class datos

 ?>