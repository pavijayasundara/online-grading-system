<?php
	header("Location:index.php");
	include_once("connect.php");
	$course=$_POST['Course'];
	$s="INSERT INTO lecturer(userName,course) VALUES('$_POST[un]','$course')";
	$q=mysql_query($s,$connect) or die("couldn't add values");

?>