<?php 
	session_start();
	include "../config/config.php";

	$email = $_POST['email'];
	$pass = $_POST['password'];
	$salt = "Decrypt.aja.kalo_bisa!";

	$crypt = sha1(sha1($email).sha1($pass).$salt);

	$query=mysqli_query($conn, "SELECT * FROM users where email='$email' and password='$crypt'");
	if($var = mysqli_fetch_array($query)){ 
		$_SESSION['email']=$email;
		header("location:../sukses.php");
	}else{
		header("location:../login.php");
	}
?>
