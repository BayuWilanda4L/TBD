<?php 
	include "../config/config.php";

	$email = $_POST['email'];

	if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
		echo "Masukan Email Yang Valid";
	} else {
		$query = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
		if ($var=mysqli_fetch_array($query)) {
			echo "email sudah ada";
		} else {
			echo "email tersedia";
		}
	}
?>