<?php 
	// Clase conexion, Tiene el método conectar para conectarse a la bd
	
	/**
	 * 
	 */
	class connection
	{	

		private $link;
		private $user;
		private $password;
		
		function conectar(){
			$this->$link = "mysql:host=localhost;dbname=practica10";
			$this->$user = "root";
			$this->$password = "";

			$pdo = new PDO($link, $user, $password);
		}
	}


 ?>