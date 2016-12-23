<?php 
	include "../config/config.php";

	$nama = $_POST['nama_lengkap'];	

	$email = $_POST['email'];

	$crypt = sha1(sha1($email).sha1($_POST['password']));

	$tanggal = $_POST['tanggal'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];

	if ($tanggal == '0' || $tahun == '0') {
		echo "<script>alert('Tanggal atau tahun kosong.'); window.location=('../register.php') </script>";
	} else {
		$date = "$tahun-$bulan-$tanggal";

		$alamat = $_POST['alamat'];

		if (isset($_POST['daftar'])) {
			if(empty($nama) || empty($email) || empty($_POST['password'])){
				echo "<script>alert('Form tidak boleh kosong! Silakan ulangi lagi.'); window.location=('../register.php') </script>";
			}elseif (isset($_POST['daftar'])) {
				$query = mysqli_query($conn, "INSERT INTO users (email,password,nama_lengkap,ttl,alamat) VALUES ('$email','$crypt','$nama','$date','$alamat')");
				if ($query) {
					echo "berhasil daftar, habis ini kemana?";
				} else {
					echo "gagal";
				}
			}
		}
	}
?>