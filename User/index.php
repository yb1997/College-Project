<?php include "../setup.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title><?php echo SITE_NAME." | "."User name" ?></title> <!-- load user name here from database -->
	<?php include "../config/csslinks.php"; ?>
</head>
<body>

	<?php include "../template/navbar.php"; ?>

	<div class="container">
		<img src="http://unsplash.it/200/200" alt="profile_image">
		<h3>Name <span><?php echo (isset($user['name']))?$user['name']:'Anonymous'; ?></span></h3>
	</div>


<!-- Footer -->
  <footer>
    <p>&copy; 2017</p>
  </footer>

<!-- Scripts -->
  <script type="text/javascript" src="../vendor/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../vendor/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/nav-bar.js"></script>

</body>
</html>