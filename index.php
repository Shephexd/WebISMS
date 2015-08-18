<?php

	if($_SESSION['id'] != ""){
		echo "<script> window.location = 'login.php'; </script>";
		exit();
	}else
	{
		echo "<script> window.location = 'home.php'; </script>";
		exit();
	}
?>