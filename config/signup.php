<?php include '../setup.php'; ?>

<?php 
	$name = $_POST['usr-name'];
	$password = $_POST['usr-pwd'];
	$email = $_POST['usr-email'];

	// $name = mysqli_real_escape_string($name);
	// $password = mysqli_real_escape_string($password);
	// $email = mysqli_real_escape_string($email);
	
	if (!is_null($name) && !is_null($password) && !is_null($email)) {
		$get_usr_query = "INSERT INTO `user` (`name`,`password`,`email`) VALUES ('$name','$password','$email')";
		$get_usr_query_result = mysqli_query($conn,$get_usr_query) or die('sign up failed !');
	} else {
		echo "<h1>Data not uploaded to the server !</h1>";
		echo "<a href='../'>Home</a>";
	}
	
	mysqli_close($conn);
	header('Location: ../index.php');
?>