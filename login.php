<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/login_style.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<title>Login Page</title>
</head>
<body>
	<div class="login">
		<div class="sealinked-logo">
			<p>sealinked.co.id</p>
		</div>

		<form action="controller/proc_login.php" method="POST" class="form-horizontal">
			<div class="form-group">
		    	<div class="input-group col-md-9 login-centered">
		    		<div class="input-group-addon form"><i class="fa fa-id-card"></i></div>
		    		<input type="text" class="form-control form" id="id" name="id" placeholder="No. ID">
		    	</div>
		    </div>

		    <div class="form-group">
		    	<div class="input-group col-md-9 login-centered">
		    		<div class="input-group-addon form"><i class="fa fa-unlock fa-lg"></i></div>
		    		<input type="password" class="form-control form" id="password" name="password" placeholder="Password">
		    	</div>
		    </div>

			<div class="form-group">
			   	<div class="col-md-10 login-centered">
				    <button type="submit" id="login" class="btn btn-primary col-md-12 login-centered">Login</button>
			    </div>
			</div>

			<div class="form-group">
				<div class="col-md-2 reg">
					<a href="register">Register</a>
				</div>

				<div class="col-md-5 pull-right lost">
					<a href="#">Lost your password?</a>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
