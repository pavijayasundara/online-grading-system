<html>
</head>

<body>
<form method="POST" action="edit.php">

<table >
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
	<td>Student's Index:</td>
	<td><input type="text" name="index" size=40></td>
    
</tr>

<tr>
	<td>Marks:</td>
	<td><input type="text" name="marks" size=40></td>
    <td><input name="sub" type="submit" value="Submit" ></td>
    <td><input name="ed" type="submit" value="Edit" ></td>
</table>

</form>
</body>
</html>