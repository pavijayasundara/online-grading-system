<?
session_start();
include_once("connect.php");
include_once("heading.php");?>

<html>
<body>

<?
$q2=mysql_query("SELECT * FROM lecturer WHERE userName='".mysql_real_escape_string($_SESSION['user']['userName'])."'");
$row=mysql_fetch_array($q2);
$_SESSION['user']['course']=$row["course"];
echo "<br>";
echo $_SESSION['user']['course'];



//In course 1 assignmnet 1 being inserted to `course1` table
if($_SESSION['user']['course']=="Course1" or ($_SESSION['user']['level']==1) ){
    $result=mysql_query("SELECT DISTINCT st_index FROM courses WHERE course_no='Course1'");
    while($index=mysql_fetch_array($result)){
        echo"<br>";
        $result2=mysql_query("SELECT * FROM courses WHERE course_no='Course1' AND st_index='$index[0]'") ;
        while($i2=mysql_fetch_array($result2)){
            $ass_no=$i2['assignment_no'];
            if($ass_no=='1'){
                
                $result3=mysql_query("INSERT INTO course1(Student_Index,Assignment1) VALUES('$index[0]','$i2[marks]')"); 
                }
            if($ass_no=='2'){
                $result4=mysql_query("UPDATE course1 SET Assignment2=$i2[marks] WHERE Student_Index='$index[0]'");
				}
            if($ass_no=='3'){
                $result4=mysql_query("UPDATE course1 SET Assignment3=$i2[marks] WHERE Student_Index='$index[0]'");
				}
			if($ass_no=='4'){
                $result4=mysql_query("UPDATE course1 SET Assignment4=$i2[marks] WHERE Student_Index='$index[0]'");
				}
			if($ass_no=='5'){
                $result4=mysql_query("UPDATE course1 SET Assignment5=$i2[marks] WHERE Student_Index='$index[0]'");
				}

            } 


        }
	if($_SESSION['user']['course']=="Course1"){
				
	$sql="SELECT Student_Index,Assignment1,Assignment2,Assignment3,Assignment4,Assignment5,weighted_average,grade FROM weighted_course1";
	$result=mysql_query($sql,$connect);
	?><div class=course><?
	echo "<table>";
	$num_of_rows=mysql_num_rows($result);
	for($k=0;$k<mysql_num_fields($result);$k++){
		echo "<th>";
		echo mysql_field_name($result,$k);
		echo "</th>";		
	}
	while($r=mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$r["Student_Index"]."</td><td>".$r["Assignment1"]."</td><td>".$r["Assignment2"]."</td><td>".$r["Assignment3"]."</td><td>".$r["Assignment4"]."</td><td>".$r["Assignment5"]."</td><td>".$r["weighted_average"]."</td><td>".$r["grade"]."</td>";
		echo "</tr>";
	}
	echo "</table>"; 
    ?></div><?
    }
}
	
if($_SESSION['user']['course']=="Course2" or ($_SESSION['user']['level']==1)){
    $result=mysql_query("SELECT DISTINCT st_index FROM courses WHERE course_no='Course2'");
    while($index=mysql_fetch_array($result)){
        echo"<br>";
        $result2=mysql_query("SELECT * FROM courses WHERE course_no='Course2' AND st_index='$index[0]'");
        while($i2=mysql_fetch_array($result2)){
            $ass_no=$i2['assignment_no'];
            if($ass_no=='1'){
                
                $result3=mysql_query("INSERT INTO course2(Student_Index,Assignment1) VALUES('$index[0]','$i2[marks]')"); 
                }
            if($ass_no=='2'){
                $result4=mysql_query("UPDATE course2 SET Assignment2=$i2[marks] WHERE Student_Index='$index[0]'");
				}
            if($ass_no=='3'){
                $result4=mysql_query("UPDATE course2 SET Assignment3=$i2[marks] WHERE Student_Index='$index[0]'");
				}
			if($ass_no=='4'){
                $result4=mysql_query("UPDATE course2 SET Assignment4=$i2[marks] WHERE Student_Index='$index[0]'");
				}
			if($ass_no=='5'){
                $result4=mysql_query("UPDATE course2 SET Assignment5=$i2[marks] WHERE Student_Index='$index[0]'");
				}

            } 


        } 
	if($_SESSION['user']['course']=="Course2"){
	$sql="SELECT Student_Index,Assignment1,Assignment2,Assignment3,Assignment4,Assignment5,weighted_average,grade FROM weighted_course2";
	$result=mysql_query($sql,$connect);
	?>
    <div class=course><?
	echo "<table>";
	$num_of_rows=mysql_num_rows($result);
	for($k=0;$k<mysql_num_fields($result);$k++){
		echo "<th>";
		echo mysql_field_name($result,$k);
		echo "</th>";		
	}
	while($r=mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$r["Student_Index"]."</td><td>".$r["Assignment1"]."</td><td>".$r["Assignment2"]."</td><td>".$r["Assignment3"]."</td><td>".$r["Assignment4"]."</td><td>".$r["Assignment5"]."</td><td>".$r["weighted_average"]."</td><td>".$r["grade"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
	?></div><?

    }
}
if($_SESSION['user']['level']==1){
	echo "Export table 'course1','course2' as CSV files with field names";
	}


?>


</body>
</html>