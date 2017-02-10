<?php 
	session_start();
	include "../config/config.php";

	$email = $_POST['email'];
	$pass = $_POST['password'];
	$salt = "Decrypt.aja.kalo_bisa!";

	$pass_crypt = sha1(sha1($email).sha1($pass).$salt);

	$sql1 = mysqli_query($conn, "SELECT * FROM user WHERE username='$email'");
	$var1 = mysqli_fetch_array($sql1);

	$join = mysqli_query($conn, "SELECT * FROM login_user
									INNER JOIN user USING (no_id) where no_id='$var1[no_id]' and password='$pass_crypt'");

	if($var_join = mysqli_fetch_array($join)){ 
		$_SESSION['email']=$email;
		header("location:../sukses.php");
	}else{
		header("location:../login");
	}
?>