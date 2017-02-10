<?php 
	session_start();
	include "../config/config.php";

	$no_id = $_POST['id'];
	$pass = $_POST['password'];
	$salt = "Decrypt.aja.kalo_bisa!";

	$pass_crypt = sha1(sha1($no_id).sha1($pass).$salt);

	$query=mysqli_query($conn, "SELECT * FROM db_sealinked.login_user where no_id='$no_id' and password='$pass_crypt'");
	if($var = mysqli_fetch_array($query)){ 
		$_SESSION['no_id']=$no_id;
		header("location:../sukses.php");
	}else{
		header("location:../login.php");
	}
?>