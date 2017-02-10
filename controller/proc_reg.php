<?php 
	include "../config/config.php";

	$nama = $_POST['nama_lengkap'];	

	$email = $_POST['email'];
	$pass = $_POST['password2'];
	$salt = "Decrypt.aja.kalo_bisa!";

	$tanggal = $_POST['tanggal'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$provinsi = $_POST['provinsi'];
	$kab_kot = $_POST['kabupaten'];
	$kecamatan = $_POST['kecamatan'];
	$kelurahan = $_POST['kelurahan'];
	$alamat = $_POST['alamat'];
	$kode_pos = $_POST['kodepos'];
	$no_telp = $_POST['no_tlp'];
	$username = $email;
	$ttl = "$tahun-$tanggal-$bulan";

	$jml_user=mysqli_query($conn, "SELECT * FROM user");
	$total = mysqli_num_rows($jml_user);

	$now = date("Y");
	$noreg = $total++;
	$no_id = "$now-$provinsi-$total";

	$pass_crypt = sha1(sha1($no_id).sha1($pass).$salt);

	if ($tanggal == '0' || $tahun == '0' || $provinsi == '0') {
		echo "<script>alert('Masih ada form kosong.'); window.location=('../register.php') </script>";
	} else {
		$prov = mysqli_query($conn, "SELECT * FROM 'db_sealinked.provinsi' WHERE no_id='$provinsi'");
		$var = mysqli_fetch_array($prov);

		
		$sql_1 = "INSERT INTO db_sealinked.user values ('$no_id','$username')";
		$sql_2 = "INSERT INTO db_sealinked.login_user values ('$no_id','$pass_crypt')";
		$sql_3 = "INSERT INTO db_sealinked.alamat values ('$no_id','$var[prov]','$kab_kot','$alamat','$kode_pos')";
		$sql_4 = "INSERT INTO db_sealinked.profil_user values ('$no_id','$nama','$email','$ttl','00','$no_telp')";
		

		$query = mysqli_query($conn, $sql_1);
		if ($query == true) {
			$query = mysqli_query($conn, $sql_2);
			if ($query == true) {
				$query = mysqli_query($conn, $sql_3);
				if ($query == true) {
					$query = mysqli_query($conn, $sql_4);
					if ($query == true) {
						echo "<script>alert('Berhasil mendaftar. NO ID: $no_id'); window.location=('../login.php') </script>";
					}
				}
			}
		}
	}

?>