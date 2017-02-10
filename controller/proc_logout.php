<?php 	
	session_start();

	unset($_SESSION['no_id']);
	header("location:../login.php");
?>