<?php 

	require_once "controllers/controller.php";

	require_once "models/model.php";
	require_once "models/enlaces.php";

	$mvc = new controller();

	$mvc->enlacesPaginasController();

 ?>
