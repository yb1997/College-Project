<?php include '../setup.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title><?php echo SITE_NAME; ?> | Sign up</title>

  <?php include '../config/csslinks.php'; ?>
  <link rel="stylesheet" href="../css/signup.css">
</head>
<body>

	<?php include '../template/navbar.php'; ?>
	
	<div class="container">
		<div class="form-wrapper">
			<p>Sign up now</p>
			<br>
			<form method="post" action="<?php echo '../config/signup.php'; ?>" class="form" id="signup-form">
			<div class="form-group">
				<label for="usr-name" class="sr-only">User Name</label>
				<input type="text" name="usr-name" placeholder="User Name" class="form-control" id="name" />
				<p id="name-error" class="error"></p>
			</div>
			<div class="form-group">
				<input type="email" name="usr-email" placeholder="Email" class="form-control" id="email" />
				<p id="email-error" class="error"></p>
			</div>
			<div class="form-group">
				<input type="password" name="usr-pwd" placeholder="Password" class="form-control" id="password" />
				<p id="pass-error" class="error"></p>
			</div>
			<div class="form-group">
				<input type="password" name="usr-pwd-confirm" placeholder="Confirm Password" class="form-control" id="password2" />
				<p id="pass2-error" class="error"></p>
			</div>
			<button type="submit" id="submit-btn" class="btn btn-primary btn-block">Sign up</button>
		</form>
		</div>
	</div>


<!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <p>&copy; 2017</p>
    </div>
  </footer>


<!-- Scripts -->
  <script type="text/javascript" src="../vendor/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../vendor/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/nav-bar.js"></script>
  <script type="text/javascript" src="../js/signup.js"></script>

</body>
</html>