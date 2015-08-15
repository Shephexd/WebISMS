<?php
	include "db_conn.php";

	$id=$_POST['id'];
	$pw=$_POST['pw'];


	$result=mysql_query("select * from member where id = '".$id."'") or die(mysql_error());
	$info = mysql_fetch_array($result);

	if($info['pw'] == $_POST['pw']){

		header("location: ./index.php");
		echo 'Login OK';
		$_SESSION['id'] = $info['id'];
	}else{
		header("location: ./login.php");
		
	}


// if(,?,?)

?>