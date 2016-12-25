<?php 
	include "../config/config.php";

	session_start();

	$email = $_POST['email'];
	$pass = mysqli_real_escape_string($_POST['password']);

	$crypt = sha1(sha1($email).sha1($pass));

	$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' and password='$crypt'");
	if ($var=mysqli_fetch_array($query)) {
		$_SESSION['email']=$email;
		header("location:../sukses.php");
	} else {
		header("location:../login.php");
	}
?>