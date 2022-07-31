<?php
session_start();
include_once("heading.php");
?>
<html>
<body>
<?php 
echo "<br>";
echo "<br>";
echo "Welcome!  ".$_SESSION['user']['userName'];
echo "<br>";
include_once("connect.php"); 

$level = $_SESSION['user']['level'];

if($level==3){
	include_once("normal_user.php");
	}
if($level==1){
	echo "<br>";
	echo "Select Course";
	}
	
?>
</body>
</html>	

