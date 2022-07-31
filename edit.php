<?php
session_start();   
include_once("connect.php");
include_once("heading.php");
?>

<html>
<body>
<?
$i=$_POST['index'];
$m=$_POST['marks'];
if ($_SESSION['user']['level']==1){
	$a=$_POST['assignment_type'];
	}
else{
$a=$_SESSION['user']['assignment'];
}
$c=$_SESSION['user']['course'];
if(isset($_POST["sub"])){
	echo "<br>";
	$s2="INSERT INTO  `university`.`courses` (`st_index` ,`assignment_no` ,`marks` ,`course_no`)VALUES ('$i',  '$a',  '$m',  '$c')";
	$q2=mysql_query($s2,$connect) or die("couldn't add values");
	echo "<br>";
	echo "Succesfully inserted new student record";
}

if(isset($_POST["ed"])){
	$s3="UPDATE courses SET marks=$m WHERE st_index='$i' ";
$q3=mysql_query($s3,$connect) or die("couldn't add values");
if ($q3){
	echo "<br>";
	echo "succesfully updated";
	
	}
	}
?>

</body>
</html>