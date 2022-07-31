<?php
session_start();
?>
<html>
<head>
<link href="cssstyles.css" rel="stylesheet" type="text/css" />
</head>
</body>
<div class="head">
<h1>Online Marks Entry System</h1>

<div class="Box">
<a href="index.php">Home</a><br><br><br>
<a href="Logout.php">Logout</a>

<?php
if(isset($_SESSION['user'])){
	
if ($_SESSION['user']['level']==1){?>
	<div class="lec">
    <a href="course1Admin.php">Course1</a><br><br>
    <a href="course2Admin.php">Course2</a><br>
    
    </div>
		
<?
     }
if ($_SESSION['user']['level']==2){
?>
	<div class="lec">
   <a href="editData.php">Edit/Add Couse Data</a><br>
   <a href="viewStData.php">View Student Data</a><br>
   <a href="viewCourseData.php">View Course Data</a><br>
   </div>
<?	}}?>
</div>



</body>
<html>