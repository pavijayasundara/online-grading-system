<?php
include_once("heading.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="POST" action="e.php">

<table >
<tr>
<td>Select Course:*</td>
<td><select name="course_type">
	<option>Course1</option>
	<option>Course2</option>
	</select>
</td>
</tr>
<tr>
<td>Select Assignment:*</td>
<td><select name="assignment_type">
	<option>1</option>
	<option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
	</select>
</td>
</tr>

<tr>
	<td><input name="cmd"  type="submit" value="Submit" ></td>
</tr>
</table>

</form>

</body>



</html>