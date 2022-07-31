<?php
include_once("connect.php");
$name=$_POST['Name'];
$Uname=$_POST['UN'];
$password=$_POST['password'];
$mail=$_POST['Email'];
$l=$_POST['type'];
if($l== "Lecturer"){
	$userLevel=2;
	header("Location:Coursedata.php");
	}
elseif ($l=="Student"){
	$userLevel=3;
	}
else{
$userLevel=1;
	}

if($userLevel==3){
	$i=$_POST['index_no'];
	$s6="INSERT INTO student(st_index,userName) VALUES('$i','$Uname')";
	$q6=mysql_query($s6,$connect) or die("couldn't add values");
}



$sql="INSERT INTO member(name,userName,password,email,level) VALUES('$name','$Uname','$password','$mail','$userLevel')";

$query=mysql_query($sql,$connect) or die("couldn't add values");

if($query){
	include_once("index.php");
}

?>

















	
