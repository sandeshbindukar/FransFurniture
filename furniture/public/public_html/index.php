<?php
	require '../includes/includes.php';
	session_start(); //starts the session
	
	if(isset($_GET['page'])){
		require '../pages/' . $_GET['page'] .  '.php';
	}
	else{
		require '../pages/home.php';
	}
	
?>