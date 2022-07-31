<?
session_start();

$q2=mysql_query("SELECT st_index FROM student WHERE userName='".mysql_real_escape_string($_SESSION['user']['userName'])."'");
$row=mysql_fetch_array($q2);
echo "<br>"."Your Index Number: ".$row[0]."<br>";
$q3=mysql_query("SELECT * FROM weighted_course1 WHERE student_index='$row[0]'");
$row1=mysql_fetch_array($q3);

if($row1){
	echo "<br>"."Course 1: " . $row1[9];
	}
	
$q4=mysql_query("SELECT * FROM weighted_course2 WHERE student_index='$row[0]'");
$row2=mysql_fetch_array($q4);
if($row2){
	echo "<br>"."Course 2: ". $row2[9];
	}


?>