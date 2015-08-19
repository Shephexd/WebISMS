<meta charset="utf-8" />

<?php
	session_start();
	$id=$_POST['id'];
	$pw=$_POST['pw'];
	
	if($id==='admin' && $pw==='admin1234'){
		echo "Ok";
		$_SESSION['id'] = $id;
	}
	echo "<script>window.location='./index.php';</script>";

?>