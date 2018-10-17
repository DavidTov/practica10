<?php 
	
	include_once "connection.php";

	/* Clase que maneja los datos */
	class administrator{
		
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