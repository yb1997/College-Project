<?php 

	$pop_rec_query = "SELECT * FROM `recipe` WHERE `popular`='yes'";
	$pop_rec_result = mysqli_query($conn,$pop_rec_query);
	$pop_rec_rows = mysqli_fetch_all($pop_rec_result, MYSQLI_ASSOC);



?>