<?php
session_start();   
include_once("connect.php");
 
$n=$_POST['name'];
$p=$_POST['password'];
$sql=mysql_query("SELECT * FROM member WHERE `userName`='$n' AND `password`='$p'");

if(mysql_num_rows($sql)==1){
	$_SESSION['user']=mysql_fetch_array($sql);
	header("location:mainPage.php");
	}

else{
	echo "invalid user name or password" ;
}

?>