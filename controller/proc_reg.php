<?php 
	include "../config/config.php";

	$nama = $_POST['nama_lengkap'];	

	$email = $_POST['email'];
	$pass = mysqli_real_escape_string($_POST['password2']);

	$crypt = sha1(sha1($email).sha1($pass));

	$tanggal = $_POST['tanggal'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$provinsi = $_POST['provinsi'];
	$kabupaten = $_POST['kabupaten'];
	$kecamatan = $_POST['kecamatan'];
	$kelurahan = $_POST['kelurahan'];
	$alamat = $_POST['alamat'];
	$kode_pos = $_POST['kodepos'];
	$no_telp = $_POST['no_tlp'];

	if ($tanggal == '0' || $tahun == '0' || $provinsi == '0') {
		echo "<script>alert('Masih ada form kosong.'); window.location=('../register.php') </script>";
	} else {
		$date = "$tahun-$bulan-$tanggal";

		if (isset($_POST['daftar'])) {
			$query = mysqli_query($conn, "INSERT INTO users (email,password,nama_lengkap,ttl,provinsi,kabupaten,kecamatan,kelurahan,alamat_lengkap,kode_pos,no_telp) VALUES ('$email','$crypt','$nama','$date','$provinsi','$kabupaten','$kecamatan','$kelurahan','$alamat','$kode_pos','$no_telp')");
			if ($query) {
				echo "<script>alert('Berhasil mendaftar.'); window.location=('../login.php') </script>";
			} else {
				echo "gagal";
			}
		}
	}
	}
?>