<?php  
	require_once "controllers/controller.php";
	require_once "models/enlaces.php";
	require_once "models/login_Model.php";

	$mvc = new MvcController();
	$mvc->template();
?>