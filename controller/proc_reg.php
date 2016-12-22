<?php 
	include "../config/config.php";

	$nama = $_POST['nama_lengkap'];	

	$email = $_POST['email'];

	$crypt = sha1(sha1($email).sha1($_POST['password']));

	$tanggal = $_POST['tanggal'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];

	$alamat = $_POST['alamat'];

	if (isset($_POST['daftar'])) {
		$query = mysqli_query($conn, "INSERT INTO users (email,password,nama_lengkap,ttl,alamat) VALUES ('$email','$crypt','$nama','2016-03-03','$alamat')");
		if ($query) {
			echo "berhasil daftar, habis ini kemana?";
		} else {
			echo "gagal";
		}
	}
?>