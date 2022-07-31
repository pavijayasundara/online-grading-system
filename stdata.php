<?
session_start();
include_once("connect.php");
include_once("heading.php");
echo "<br>";
echo "Student Index Number  : ".$_POST["stnum"];
echo "<br>";
echo "<br>";
$q2=mysql_query("SELECT * FROM lecturer WHERE userName='".mysql_real_escape_string($_SESSION['user']['userName'])."'");
$row=mysql_fetch_array($q2);
$_SESSION['user']['course']=$row["course"];
echo $_SESSION['user']['course'];
echo "<br>";
$sql="SELECT * FROM courses WHERE course_no = '".mysql_real_escape_string($_SESSION['user']['course'])."' AND st_index = '".mysql_real_escape_string($_POST['stnum'])."'";
	
	$result=mysql_query($sql,$connect);
	
	echo "<table>";
	$num_of_rows=mysql_num_rows($result);
	for($k=1;$k<3;$k++){
		echo "<th>";
		echo mysql_field_name($result,$k);
		echo "</th>";		
	}
	while($r=mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$r["assignment_no"]."</td><td>".$r["marks"]."</td>";
		echo "</tr>";
	}
	echo "</table>";

?>