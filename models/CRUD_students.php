<?php 

	// Se incluye el archivo de conexion
	include_once "connection.php";

	// Clase para hacer el crud de los alumnos
	class studentsData{

		// Método para traer los datos de los alumnos
		function getStudents(){
			// Consulta sql
			$sql = "SELECT * FROM alumnos";

			// Se pasa la consulta como parámetro en el método prepare conformado por el objeto
			// PDOStatement conformado por el método conectar de la clase connection
			$stmt = connection::conectar()->prepare($sql);

			// Se ejecuta la consulta
			$stmt->execute();

			// Se guarda en un array los registros encontrados
			$respuestaModel = $stmt->fetchAll();

			// Se retorna el array
			return $respuestaModel;
		}


		// Método
		 
	} // end class


 ?>