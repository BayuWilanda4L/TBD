<?php 
	include "../config/config.php";

	session_start();

	$email = $_POST['email'];
	
	$emailcrypt = sha1($_POST['email']);
	$passcrypt = sha1($_POST['password']);

	$crypt = sha1($emailcrypt.$passcrypt);

	$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' and password='$crypt'");
	if ($var=mysqli_fetch_array($query)) {
		$_SESSION['email']=$email;
		header("location:../sukses.php");
	} else {
		header("location:../login.php");
	}
?>