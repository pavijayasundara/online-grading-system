<?php 
include_once("heading.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>User Login</title>
</head>

<body>

<br>
<div class="Login">
<h2>User Login</h2>
<form method="POST" action="formdata.php">

<table >
<tr>
	<td>User Name:</td>
	<td><input type="text" name="name" size=40></td>
    
</tr>

<tr>
	<td>Password:</td>
	<td><input type="password" name="password" size=40></td>
</tr>

<tr>
	
	<td><input name="comd" type="submit" value="Login" ></td>
    <td><input type="reset" value="Reset" ></td>
</tr>




</table>
<br>
<p>Not signed up.Click <a href="signup.php">here </a>to sign in. </p>
</form>
</div>


</body>
</html>