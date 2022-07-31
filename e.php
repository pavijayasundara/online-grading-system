<?php
session_start();   
include_once("connect.php");
include_once("heading.php");
?>
<html>
<body>
<?
$c=$_POST["course_type"];
$q2=mysql_query("SELECT * FROM lecturer WHERE userName='".mysql_real_escape_string($_SESSION['user']['userName'])."'");
$row=mysql_fetch_array($q2);
if(strcmp($row["course"],$c)==0){
	$_SESSION['user']['assignment']=$_POST["assignment_type"];
	$_SESSION['user']['course']=$row["course"];
	echo "Assignment: ".$_POST["assignment_type"] ;
	$sql="SELECT * FROM courses WHERE course_no = '".mysql_real_escape_string($_SESSION['user']['course'])."' AND assignment_no = '".mysql_real_escape_string($_SESSION['user']['assignment'])."'";
	
	$result=mysql_query($sql,$connect);
	
	echo "<table>";
	$num_of_rows=mysql_num_rows($result);
	for($k=0;$k<3;$k=$k+2){
		echo "<th>";
		echo mysql_field_name($result,$k);
		echo "</th>";		
	}
	while($r=mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$r["st_index"]."</td><td>".$r["marks"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
	
?>
<br>
<br>
<div class="e">
<form method="POST" action="edit.php">

<table >
<tr>
	<td>Student's Index:</td>
	<td><input type="text" name="index" size=40></td>
    
</tr>

<tr>
	<td>Marks:</td>
	<td><input type="text" name="marks" size=40></td>
    <td><input name="sub" type="submit" value="Submit" ></td>
    <td><input name="ed" type="submit" value="Edit" ></td>
    
</tr>
</table>
</form>

<div>
<?

}
else{
	echo "Invalid access to this course";
}
?>
</body>
</html>
