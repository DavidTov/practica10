<?php  

	// Clase MvcController que servirá como controlador de la aplicación
	class MvcController{

		// función template la cual llama al archivo template.php
		public function template(){
			include "views/template.php";
		}

		// Función login la cual envía los datos de ingreso de usuarios al modelo, recibe la respuesta del modelo
		// y en caso que el inicio de sesión se realice con éxito se inicializa la variable de session
		public function login(){

			// Si se mandó el form
			if(isset($_POST['email'])&&isset($_POST['contraseña'])){

				// se guarda en un array el email y el password
				$datos = array("email"=>$_POST['email'],"contraseña"=>$_POST['contraseña']);

				// Se crea un objeto del tipo login
				$log = new Login();

				// Se llama al método para iniciar sesión, si la función retorna fallo quiere decir que
				// no encontró coincidencias en la bd
				if($log->iniciar_sesion($datos)!="fallo"){

					// Si retorna algo diferente de fallo() se inicia la variable de sesión
					session_start();

					// la variable de sesion[email] se inicializa con el valor email traido por POST
					// La variable de sesion[tipo] se inicializa con lo que traiga el método del modelo					
					$_SESSION['email']=$_POST['email'];
					$_SESSION['tipo']=$log->iniciar_sesion($datos);

					// Se redirecciona al index de los usuarios (con el menú, gráficas. etc)
					header("location:views/modules/index.php");
				}else{
					// Si no se ingresaron los datos correctos para ingresar, aparece el siguiente alert
					echo "<script>alert('Email o contraseña incorrecta')</script>";
				}
			}
		}


		// Método para incluir las páginas que se han de necesitar
		public function enlacesPaginasController(){

			// Si se obtuvo una variable con GET
			if (isset($_GET['enlace'])) {
				// Se asigna en una variable la variable GET
				$enlacesController = $_GET['enlace'];
			}else{
				// Si no hay variable GET por defecto se le asigna index
				$enlacesController = "index";
			}

			// Se declara un objeto del tipo Enlaces
			$respuesta = new Enlaces();

			// Se inluye el archivo traido por el método paginasModel del objeto Enlaces
			// Se le pasa como parámetro la variable enlacesController
			include $respuesta->paginasModel($enlacesController);
		}


		// Método que le manda el nombre de una tabla al modelo para recibir todos los datos de 
		// dicha tabla y poder ser usados en la vista
		function getAllController($table){
			// Se almacena en una variable la respuesta del modelo
			$respuestaController = administrator::getAllModel($table);			

			if($respuestaController){ return $respuestaController; }
			else{ return false; }
		}



		// Método para enviar los datos del form de registro al modelo
		function addStudentController(){
			$nombre = $_POST["name"] . " " . $_POST["lastname"] . " " . $_POST["motherLastname"];
    		$carrera = $_POST["career"];
    		$maestro = $_POST["teacher"];
			// Se guarda la respuesta del modelo en una variable
			$respuestaController = administrator::addStudentModel($nombre, $carrera, $maestro);

			if($respuestaController){ 
				echo "<script> alert('registro exitoso'); </script>";
				return true; 
			}
			else { return false; }
		}


		// Método para enviar los datos del form de registro al modelo
		function addTeacherController(){

			// Se concatenan el nombre y los apellidos paterno y materno
			$name = $_POST["nameTeacher"] . " " . $_POST["lastnameTeacher"] . " " . $_POST["motherLastnameTeacher"];
    		$career = $_POST["teacherCareer"];
    		$email = $_POST["teacherEmail"];
    		$password = $_POST["teacherPassword"];    		

    		//Falta lo de la foto
    		$foto = "foto";    		    	

			// Se guarda la respuesta del modelo en una variable
			$respuestaController = administrator::addTeacherModel($name, $career, $email, $password, $foto);

			if($respuestaController){
				// si se agregó el maestro, Se manda llamar al método para registrar usuarios
				$respuestaController = administrator::addUserModel($name,$email,"teacher",$password);
				if($respuestaController){
					// Si el maestro se registró con éxito en la tabla usuarios
					echo "<script> alert('registro exitoso'); </script>";
					return true; 	
				}else{
					// Si no se agregó con éxito en la tabla usuarios
					return false;
				}				
			}
			else { 
				// Si no se agregó con éxito en la tabla maestros
				return false; 
			}
		}


		// Método para enviar los datos del form de agregar carreras al modelo
		function addCareerController(){
			$nameCareer = $_POST["nameCareer"];

			// Se guarda la respuesta del modelo en una variable
			$respuestaController = administrator::addCareerModel($nameCareer);

			// Si se agregaron con éxito retorna true, caso contrario retorna false
			if($respuestaController){ 
			    echo "<script> alert('registro exitoso'); </script>";			    
				return true; 
			}
			else{ 
				return false; 
			}
		}
	}
?>