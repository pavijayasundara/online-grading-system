<?php
session_start();
include_once("connect.php");
include_once("heading.php");
?>
<html>
<body>
<form method="POST" action="stdata.php">

<table >
<tr>
	<td>Enter Student Number:</td>
	<td><input type="text" name="stnum" size=40></td>
    
</tr>
</table>
</form>
</body>
</html>
