<?php 
	include "../config/config.php";

	$nama = $_POST['nama_lengkap'];	

	$email = $_POST['email'];

	$crypt = sha1(sha1($email).sha1($_POST['password']));

	$tanggal = $_POST['tanggal'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];

	$alamat = $_POST['alamat'];
	$rt_rw = $_POST ['rt_rw'];
	$kelurahan = $_POST['kelurahan'];
	$kecamatan = $_POST['kecamatan'];
	$kota = $_POST['kota'];
	$kode_pos = $_POST['kode_pos'];

	if (isset($_POST['daftar'])) {
		$query = mysqli_query($conn, "INSERT INTO users (email,password,nama_lengkap,ttl,alamat,rt_rw,kelurahan,kecamatan,kota,kode_pos) VALUES ('$email','$crypt','$nama','$tanggal','$alamat','$rt_rw','$kelurahan','$kecamatan','$kota','$kode_pos')");
		if ($query) {
			echo "<script>alert('Data berhasil di Tambah, Silahkan Login'); window.location=('../login.php');</script>";
		} else {
			echo "gagal";
		}
	}
?>
