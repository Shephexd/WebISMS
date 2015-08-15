<?php
	include "db_conn.php";

	if($_SESSION['id'] != ""){

	}else
	{
		echo "<script> window.location = 'login.php'; </script>";
		exit();
	}
?>
<html>
	<head>
		It is website for ISMS auth
	</head>

	<body>
		HOME
		<a href="logout.php">[logout]</a>
	</body>
</html>
