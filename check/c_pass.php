<?php 
	
	$pass1 = $_POST['password1'];
	$pass2 = $_POST['password2'];

	if (strlen("$pass1") < 8) {
		echo "Password kurang dari 8";
	} else {
		echo "woke";
	}

?>