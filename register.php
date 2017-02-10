<!DOCTYPE html>
<html lang="en">
<?php include "config/config.php" ?>
<head>
	<meta charset="UTF-8">
	<title>Halaman Registrasi</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
	<script>
		$("#form-registrasi").validate();

		$(document).ready(function(){
			$('#password1').tooltip();
		});

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
	<form action="regist"method="POST" class="form-horizontal" id="form-registrasi">
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
	    	<div id="feedback"></div>
	    </div>

	    <div class="form-group">
	    	<label class="control-label col-sm-2">Retype Password *</label>
	    	<div class="col-sm-3">
	        	<input type="password" class="form-control" id="password2" name="password2" placeholder="Retype Password" required>
	    	</div>
	    </div>

	    <div class="form-group">
	    	<label class="control-label col-sm-2">Tanggal Lahir *</label>
	    	
	    	<div class="col-sm-3 cold-md-3">
                <input type="date" class="form-control" id="ttl" name="ttl" placeholder="Tanggal Lahir" required>
	    	</div>
	    </div>

	    <div class="form-group">
	    	<label class="control-label col-sm-2">Provinsi *</label>
	    	<div class="col-sm-2">
	        	<select name="provinsi" id="provinsi" class="form-control">
	        		<option value="0" selected>- Provinsi -</option>
	        		<?php 
	        			$query = mysqli_query($conn, "SELECT * FROM provinsi ORDER BY prov ASC");
	        			
	        			while ($var = mysqli_fetch_array($query)) {
	        				echo "<option value=$var[no_id]>$var[prov]</option>";
	        			}
	        		?>
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
	    Sudah Punya Akun? <a href="login">Login</a>
		</div>

	</form>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/jquery-1.8.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/check.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.js"></script>
</body>
</html>
