<!DOCTYPE html>
<html lang="en">
<?php 
	include "config/config.php";
	session_start();
 	if(empty($_SESSION['email'])){
 		header("location:login.php");
	}
	$query = mysqli_query($conn, "SELECT * FROM profil_user where email='$_SESSION[email]'");
	$var = mysqli_fetch_array($query);
?>
<head>
	<meta charset="UTF-8">
	<title>Main Page <?php echo $var['nama'] ?></title>
</head>
<body>
	
	<h1>Main Page</h1>

	<p>Selamat datang, <?php echo "$var[email]" ?></p>
	<p><a href="logout">Logout</a></p>
</body>
</html>