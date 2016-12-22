<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Registrasi</title>

	<script src="js/jquery.js"></script>

	<script>
		$(document).ready(function(){
			// $('#feedback').load('check/c_email.php').show();

			$('#email').keyup(function() {
				var email = $(this).val();
				$.ajax({
					type: 'POST',
					url: 'check/c_email.php',
					data: 'email=' + email,
					success: function(response) {
						$('#feedback').html(response);
					}
				});
			});
		});
	</script>
</head>
<body>
	<h1>Registration Page</h1>
	<form action="controller/proc_reg.php" method="POST">
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td>
					<input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="text" name="email" id="email" placeholder="Email">
					<div id="feedback"></div>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="text" name="tanggal"></td>
				<td>
					<select name="bulan" id="">
						<option value="">Januari</option>
						<option value="">Februari</option>
					</select>
				</td>
				<td>
					<select name="tahun" id="">
						<option value=""> - Tahun - </option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td><button type="submit" name="daftar">Daftar</button></td>
			</tr>
			<tr>
				<td>Sudah Punya Akun? <a href="login.php">Login</a></td>
			</tr>
		</table>
	</form>
</body>
</html>