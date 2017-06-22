<?php include '../setup.php'; ?>
<?php 
	if (!$_POST) {
		header('Location: ../');
	}

	if(isset($_POST['log-out']) && $_POST['log-out'] == 'yes') {
		unset($_SESSION['usr-id']);
		session_destroy();
		header('Location: '.$_SERVER['HTTP_REFERER']);//javascript://
	}


	if (isset($_POST['login'],$_POST['usr-name'],$_POST['usr-pwd'])) {
		$name = $_POST['usr-name'];
		$usr_pwd = $_POST['usr-pwd'];

		$get_usr_query = "SELECT * FROM `user` WHERE `name` = '$name' AND `password` = '$usr_pwd'";
		$get_usr_result = mysqli_query($conn,$get_usr_query) or die("username or password is incorrect");
		$get_usr_result_array = get_object_vars($get_usr_result);

		if ((!is_nan($get_usr_result_array['num_rows']))) { // if a row is found
			$user = mysqli_fetch_assoc($get_usr_result);
			$_SESSION['usr-id'] = $user['id'];
			header('Location: '.$_SERVER['HTTP_REFERER']);
		} else {
			echo '<h2>username or password is incorrect<h2>';
		}

	}
?>