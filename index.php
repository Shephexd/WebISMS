<meta charset="utf-8" />
<?php
	session_start();
	if(isset($_SESSION['id'])){
		echo "<script> window.location = 'home.php'; </script>";
		exit();
	}else
	{
		echo "<script> window.location = 'login.php'; </script>";
		exit();
	}
?>