<?php
	include "db_conn.php";

	$id=$_POST['id'];
	$pw=$_POST['pw'];
	
//	$result=mysql_query("select * from member where id = '".$id."'") or die(mysql_error());
//	$info = mysql_fetch_array($result);

	if($id==='admin' && $pw==='admin1234'){

		header("location: ./index.php");
		echo 'Login OK';
		$_SESSION['id'] = $id;
	}
	else{
		header("location: ./login.php");
		
	}

?>

<html>
<body>
	<?php 
	echo "hh";
	echo $id;
	echo $pw;

	?>
	</body>
</html>