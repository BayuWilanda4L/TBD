<?php 
	
	$pass1 = $_POST['password1'];
	$pass2 = $_POST['password2'];

	if ("$pass1" == "$pass2") {
		echo "woke";
	} else {
		echo "salah";
	}

?>