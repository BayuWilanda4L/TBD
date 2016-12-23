<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Registrasi</title>

	<script src="js/jquery.js"></script>

	<script>
		$(document).ready(function(){
			$('#feedback').load('check/c_email.php').show();

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
					<input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="text" name="email" id="email" placeholder="Email">
					<div id="feedback"></div>				</td>
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
						<option>Maret</option>
						<option>April</option>
						<option>Mei</option>
						<option>Juni</option>
						<option>Juli</option>
						<option>Agustus</option>
						<option>September</option>
						<option>Oktober</option>
						<option>November</option>
						<option>Desember</option>
					</select>				</td>
				<td>
					<select name="tahun" id="">
					  <option value="">1940</option>
					  <option>1941</option>
					</select>				</td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td><label>
				  <select name="provinsi" id="provinsi">
				    <option value="Bali">Bali</option>
		            </select>
				</label></td>
			</tr>
			<tr>
				<td>Kabupaten</td>
				<td><label>
				  <input name="kabupaten" type="text" id="kabupaten">
				</label></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td><label>
				  <input name="kecamatan" type="text" id="kecamatan">
				</label></td>
			</tr>
			<tr>
			  <td>Kelurahan/Desa</td>
			  <td><label>
			    <input name="kelurahan" type="text" id="kelurahan">
			  </label></td>
		  </tr>
			<tr>
			  <td>Alamat Lengkap </td>
			  <td><label>
			    <input name="alamat" type="text" id="alamat">
			  </label></td>
		  </tr>
			<tr>
			  <td>Kode Pos </td>
			  <td><label>
			    <input name="kode_pos" type="text" id="kode_pos">
			  </label></td>
		  </tr>
			<tr>
			  <td>No. Telepon </td>
			  <td><label>
			    <input name="no_telp" type="text" id="no_telp">
			  </label></td>
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
