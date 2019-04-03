<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style type="text/css">
	

	@import url('https://fonts.googleapis.com/css?family=Numans');

	html,body{
		background-image: url('<?php echo base_url();?>assets/images/ini-bg.png');
		background-size: cover;
		background-repeat: no-repeat;
		height: 100%;
		font-family: 'Numans', sans-serif;
	}

	.container{
		height: 100%;
		align-content: center;
	}

	.card{
		height: 470px;
		margin-top: auto;
		margin-bottom: auto;
		width: 400px;
		background-color: #ffff !important;
	}

	.social_icon span{
		font-size: 60px;
		margin-left: 10px;
		color: #bfbaba;
	}

	.social_icon span:hover{
		color: white;
		cursor: pointer;
	}

	.card-header h3{
		color: white;
	}

	.social_icon{
		position: absolute;
		right: 20px;
		top: -45px;
	}

	.input-group-prepend span{
		width: 30px;
		background-color: transparent;
		color: grey;
		border: 0px solid grey!important;
		border-bottom:  2px solid #0174f1!important;
	}

	input:focus{
		outline: 0 0 0 0  !important;
		box-shadow: 0 0 0 0 !important;

	}

	.remember{
		color: black;
	}

	.remember input
	{
		width: 20px;
		height: 20px;
		margin-left: 15px;
		margin-right: 5px;
	}

	.login_btn{
		color: white;
		background-color: #0174f1;
		width: 85%;
		border-radius: 5px!important;
	}

	.form-control{
		border: 0px solid grey!important;
		border-bottom: 2px solid #0174f1!important;
	}

	.login_btn:hover{
		color: white;
		background-color: #0174f1;
	}

	.links{
		color: white;
	}

	.links a{
		margin-left: 4px;
	}
</style>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-body">
					<h3>Sign Up</h3>
					<div class="d-flex justify-content-end social_icon">
					</div>
					<br>
					<form method="post" action="<?php echo base_url(); ?>register/do_register">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="far fa-address-book"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="full name" name="nama">

						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="email" name="email">

						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-phone"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="phone number" name="no_telp">

						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="username" name="username">

						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="password" name="password">
						</div>
						<div class="input-group form-group">
							Already have an account?&nbsp;&nbsp;<a href="<?php echo base_url('Login'); ?>"> Sign In</a>
						</div>
						<div class="form-group">
					<!-- 	
								<input type="submit" value="Login" class="btn float-right login_btn">
							-->
							<br>
							<center>
								<a href="<?php echo base_url('Home'); ?>">
									<input type="submit" value="Register" class="btn login_btn">
								</a>
							</center>
						</div>
					</form>
				</div>
<!-- 				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Don't have an account?<a href="#">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#">Forgot your password?</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</body>
</html>


