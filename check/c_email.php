<?php 
	include "../config/config.php";

	$email = $_POST['email'];
	if (empty($email)) {
		echo "<style>#email {background-color:transparent}</style>";
	} elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
		echo "<style>#email {background-color:#f2dede;color:#a94442}</style><span style='background-color:#f2dede;color:#a94442; padding:8px; margin-left:5px; border-radius:4px;'>Gunakan @ dan . (titik)</span>";
	} else {
		$query = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
		if ($var=mysqli_fetch_array($query)) {
			echo "<style>#email {background-color:#f2dede;color:#a94442}</style><span style='background-color:#f2dede;color:#a94442; padding:8px; margin-left:5px; border-radius:4px;'>Email sudah pernah digunakan</span>";
		} else {
			echo "<style>#email {background-color:#dff0d8;color:#3c763d}</style>";
		}
	}
?>