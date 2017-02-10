<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<title>Welcome Page</title>
</head>
<body>
	<h1>Welcome Page</h1>
	<form action="controller/proc_login.php" method="POST" class="form-horizontal">
		<div class="form-group">
	    	<label class="control-label col-sm-1">Email</label>
	    	<div class="col-sm-3">
    	    	<input type="text" class="form-control" id="email" name="email" placeholder="Email">
	    	</div>
	    </div>

	    <div class="form-group">
	    	<label class="control-label col-sm-1">Password</label>
	    	<div class="col-sm-3">
    	    	<input type="password" class="form-control" id="password" name="password" placeholder="Password">
	    	</div>
	    </div>

		<div class="form-group">
		   	<div class="col-sm-1">
			    <button type="submit" id="login" class="btn btn-primary">Login</button>
		    </div>
	    Belum Punya Akun? <a href="register">Daftar</a>
		</div>

	</form>

	<h1>Disini Nanti Konten Lain</h1>
</body>
</html>
