<!DOCTYPE html>
<html lang="en">
<?php 
	include "config/config.php";
	session_start();
 	if(empty($_SESSION['email'])){
 	header("location:login.php");
}
?>
<head>
	<meta charset="UTF-8">
	<title>Main Page</title>
</head>
<body>
	<?php 
		$query = mysqli_query($conn, "SELECT * FROM users where email='$_SESSION[email]'");
		$var = mysqli_fetch_array($query);
	?>
	<h1>Main Page</h1>

	<p>Selamat datang, <?php echo "$var[email]" ?></p>
	<p><a href="controller/proc_logout.php">Logout</a></p>
</body>
</html>