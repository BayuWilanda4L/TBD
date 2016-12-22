<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome Page</title>
</head>
<body>
	<h1>Welcome Page</h1>
	<form action="controller/proc_login.php" method="POST">
		<h3>Login</h3>
		<table>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" placeholder="Email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr>
				<td><button type="submit">Submit</button></td>
				<td><a href="register.php">Buat Akun</a></td>
			</tr>
		</table>
	</form>

	<h1>Disini Nanti Konten Lain</h1>
</body>
</html>