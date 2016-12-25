<?php 
	$nama = $_POST['nama'];

	if (empty($nama) || $nama == " ") {
		echo "<style>#nama_lengkap {background-color:#f2dede;}</style><span style='background-color:#f2dede;color:#a94442; padding:8px; margin-left:5px; border-radius:4px;'>Nama tidak boleh kosong</span>";
	}
?>