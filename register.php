<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Registrasi</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/check.js"></script>
	
	<script>
		$(document).ready(function(){
			$('#password1').tooltip();


		});

		//untuk pencegahan user memasukan karakter selain 0-9
		function numOnly(input) {
			var karakter = /[^0-9]/gi;

			input.value = input.value.replace(karakter, "");
		}

		function lettersOnly(input) {
			var karakter = /[^a-z ]/gi;

			input.value = input.value.replace(karakter, "");
		}
	</script>
</head>
<body>
	<h1>Registration Page</h1>
	<form action="controller/proc_reg.php"method="POST" class="form-horizontal" id="form-registrasi">
		<div class="form-group">
	    	<label class="control-label col-sm-2">Nama Lengkap *</label>
	    	<div class="col-sm-3">
    	    	<input required type="text" onkeyup="lettersOnly(this) "class="form-control text-capitalize" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" >
	    	</div>
	    </div>

		<div class="form-group">
	    	<label class="control-label col-sm-2">Email *</label>
	    	<div class="col-sm-3">
	        	<input name="email" id="email" type="email" class="form-control" placeholder="Email" required>
	    	</div>
	  		
	    </div>

	    <div class="form-group">
	    	<label class="control-label col-sm-2">Password *</label>
	    	<div class="col-sm-3">
	        	<input type="password" class="form-control" id="password1" name="password1" placeholder="Password" required data-toggle='tooltip' title="Gunakan sekurang-kurangnya 8 karakter" data-placement="bottom">
	    	</div>
	    </div>

	    <div class="form-group">
	    	<label class="control-label col-sm-2">Retype Password *</label>
	    	<div class="col-sm-3">
	        	<input type="password" class="form-control" id="password2" name="password2" placeholder="Retype Password" required>
	    	</div>
	    </div>

	    <div class="form-group">
	    	<label class="control-label col-sm-2">Tanggal Lahir *</label>
	    	<div class="col-sm-1">
	        	<input type="text" onkeyup="numOnly(this)" class="form-control" id="tanggal" name="tanggal" maxlength="2" placeholder="Tanggal" required>
	    	</div>
	    	<div class="col-sm-2">
	        	<select name="bulan" id="bulan" class="form-control">
	        		<option value="0">Bulan</option>
	        		<option value="01">Januari</option>
	        		<option value="02">Februari</option>
	        		<option value="03">Maret</option>
	        		<option value="04">April</option>
	        		<option value="05">Mei</option>
	        		<option value="06">Juni</option>
	        		<option value="07">Juli</option>
	        		<option value="08">Agustus</option>
	        		<option value="09">September</option>
	        		<option value="10">Oktober</option>
	        		<option value="11">November</option>
	        		<option value="12">Desember</option>
	        	</select>
	    	</div>
	    	<div class="col-sm-2">
	        	<select name="tahun" id="tahun" class="form-control">
	        		<option value="0">Tahun</option>
	        		<?php
	        			for ($tahun=1940; $tahun <= 2000 ; $tahun++) { 
	        				echo "<option value='$tahun'>$tahun</option>";
	        			}
	        		?>
	        	</select>
	    	</div>
	    </div>

	    <div class="form-group">
	    	<label class="control-label col-sm-2">Provinsi *</label>
	    	<div class="col-sm-2">
	        	<select name="provinsi" id="provinsi" class="form-control">
	        		<option value="0">Provinsi</option>
	        		<option>Jawa Barat</option>
	        	</select>
	    	</div>
	    </div>

	    <div class="form-group">
	    	<label class="control-label col-sm-2">Kabupaten/Kota *</label>
	    	<div class="col-sm-3">
	        	<input type="text" class="form-control text-capitalize" id="kabupaten" name="kabupaten" placeholder="Kabupaten" required>
	    	</div>
	    </div>
		
		<div class="form-group">
	    	<label class="control-label col-sm-2">Kecamatan *</label>
	    	<div class="col-sm-3">
	        	<input type="text" class="form-control text-capitalize" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required>
	    	</div>
	    </div>

	    <div class="form-group">
	    	<label class="control-label col-sm-2">Kelurahan/Desa *</label>
	    	<div class="col-sm-3">
	        	<input type="text" class="form-control text-capitalize" id="kelurahan" name="kelurahan" placeholder="Kelurahan/Desa" required>
	    	</div>
	    </div>

	    <div class="form-group">
	    	<label class="control-label col-sm-2">Alamat *</label>
	    	<div class="col-sm-3">
	        	<textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
	    	</div>
	    </div>

		<div class="form-group">
	    	<label class="control-label col-sm-2">Kode Pos *</label>
	    	<div class="col-sm-3">
	        	<input type="text" maxlength="5" onkeyup="numOnly(this)" class="form-control" id="kodepos" name="kodepos" placeholder="Kode Pos" required>
	    	</div>
	    </div>	    

	    <div class="form-group">
	    	<label class="control-label col-sm-2">No. Telepon *</label>
	    	<div class="col-sm-3">
	        	<input type="text" onkeyup="numOnly(this)" class="form-control" id="no_tlp" name="no_tlp" placeholder="No. Telepon" required>
	    	</div>
	    </div>
		<div class="form-group">
	    	<label class="control-label col-sm-2"></label>
	    	<div class="col-sm-4">
	    		
					<textarea class="form-control" rows="8" id="terms" readonly> lorem  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus quis suscipit soluta repellendus autem! Repellat facilis nam iure eligendi doloremque magni sint, rerum recusandae, harum modi pariatur deserunt repellendus atque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste similique, obcaecati nemo. Architecto voluptas sequi impedit maxime facere placeat perferendis, quod, eveniet fuga perspiciatis, nostrum accusamus asperiores odio tenetur reiciendis.</textarea>
				
	    	</div>
	    </div>
	    <div class="form-group">
	    	<label class="control-label col-sm-2"></label>
	    	<div class="col-sm-4">
	        	<label class="checkbox-inline"><input type="checkbox" id="setuju" required>Saya menyetujui syarat dan ketentuan yang berlaku</label>
				<span id="pesan_check"></span>
	    	</div>
	    </div>
	    <div class="form-group">
		   	<div class="col-sm-3">
			    <button type="submit" style="float:right" name="daftar" id="daftar" class="btn btn-primary">Daftar</button>
		    </div>
	    Sudah Punya Akun? <a href="login.php">Login</a>
		</div>

	</form>
	<script>
		$("#form-registrasi").validate();
	</script>
	
</body>
</html>
