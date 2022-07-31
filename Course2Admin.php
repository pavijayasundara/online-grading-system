<?php
session_start();   
include_once("connect.php");
include_once("heading.php");
$_SESSION['user']['course']='Course2';
include_once("adminForm.php");
?>
<html>
<body>
<a href="viewCourseData.php">Calculate Grade</a><br>
</body>
</html>

