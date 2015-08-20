<meta charset="utf-8" />

<?php
	session_start();
	$id=$_POST['id'];
	$pw=$_POST['pw'];
	
	if($id==='bob' && $pw==='kitri!@#'){
		echo "Ok";
		$_SESSION['id'] = $id;
	}
	echo "<script>window.location='./index.php';</script>";

?>