<?php 
	include "../config/config.php";

	$nama = $_POST['nama_lengkap'];	

	$email = $_POST['email'];
	$pass = $_POST['password2'];
	$salt = "Decrypt.aja.kalo_bisa!";

	$pass_crypt = sha1(sha1($email).sha1($pass).$salt);

	$ttl = $_POST['ttl'];

	$provinsi = $_POST['provinsi'];
	$kab_kot = $_POST['kabupaten'];
	$kecamatan = $_POST['kecamatan'];
	$kelurahan = $_POST['kelurahan'];
	$alamat = $_POST['alamat'];
	$kode_pos = $_POST['kodepos'];
	$no_telp = $_POST['no_tlp'];
	$username = $email;

	$jml_user=mysqli_query($conn, "SELECT * FROM user");
	$total = mysqli_num_rows($jml_user);

	$now = date("Y");
	$noreg = $total++;
	$no_id = "$now-$provinsi-$total";


	if ($tanggal == '0' || $tahun == '0' || $provinsi == '0') {
		echo "<script>alert('Masih ada form kosong.'); window.location=('register') </script>";
	} else {
		$prov = mysqli_query($conn, "SELECT * FROM provinsi WHERE no_id='$provinsi'");
		$var = mysqli_fetch_array($prov);

		
		$sql_1 = "INSERT INTO user values ('$no_id','$username')";
		$sql_2 = "INSERT INTO login_user values ('$no_id','$pass_crypt')";
		$sql_3 = "INSERT INTO alamat values ('$no_id','$var[prov]','$kab_kot','$alamat','$kode_pos')";
		$sql_4 = "INSERT INTO profil_user values ('$no_id','$nama','$email','$ttl','00','$no_telp')";
		

		$query = mysqli_query($conn, $sql_1);
		if ($query == true) {
			$query = mysqli_query($conn, $sql_2);
			if ($query == true) {
				$query = mysqli_query($conn, $sql_3);
				if ($query == true) {
					$query = mysqli_query($conn, $sql_4);
					if ($query == true) {
						echo "<script>alert('Berhasil mendaftar. NO ID: $no_id'); window.location=('login') </script>";
					}
				}
			}
		}
	}

?>