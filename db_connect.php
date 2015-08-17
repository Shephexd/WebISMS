<?php
	mysql_connect("127.0.0.1", "root", "asdf1234");
	mysql_select_db("isms");

?>

<!--
	mysql_query("set session character_set_connection=utf8;");
	mysql_query("set session character_set_results=euckr;");
	mysql_query("set session character_set_client=utf8;");

  $result=mysql_query("select * from list where theme='기술'") or die(mysql_error());
  $info = mysql_fetch_array($result);

  echo $info[4];
-->