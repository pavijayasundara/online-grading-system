<script language="javascript">
function validation(){
	var usertype= document.frm.type.value;
	var stindex=document.frm.index_no.value;
	var password= document.frm.password.value;
	var password2=document.frm.confirmpassword.value;
	
	if(usertype=="Student"){
		if(stindex.length<5){
			 alert('Please type the student index number');
		 	return false;
		 }
	}
	else if (password.length<5){
		alert ("Password too short");
		return false;
		}
	else if(password!=password2){
		alert("password mismatch");
		return false;
		}
	
	return true;

}
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style>
td {padding: 15px;}
.SignUp{margin:100px 0px 0px 200px;}
.head{background-color:#09F; font-size:18px;height:100px}
</style>
<title>sign Up</title>
</head>
 
<body>
<div class="head">
<h1>Online Marks Entry System</h1>
</div>
<div class="SignUp">
<form method="POST"  name="frm" action="signupdata.php" onSubmit="return validation()">

<table >
<tr>
	<td>Name:</td>
	<td><input type="text" name="Name" size=40></td>
</tr>

<tr>
	<td>User Name:*</td>
	<td><input type="text" name="UN" size=40></td>
</tr>

<tr>
	<td>Password:*</td>
	<td><input type="password" name="password" size=40></td>
</tr>
<tr>
	<td>Confirm Password:*</td>
	<td><input type="password" name="confirmpassword" size=40></td>
</tr>
<td>User Type:*</td>
<td><select name="type">
	<option>Lecturer</option>
	<option>Student</option>
	</select>
</td>
<tr>
	<td>If student enter Student Index Number</td>
	<td><input type="text" name="index_no" size=40></td>
</tr>
<tr>
	<td>Email:</td>
	<td><input type="text" name="Email" size=40 /></td> 
</tr>


<tr>
	
	<td><input name="cmd" type="submit" value="SignUp" ></td>
</tr>


</table>

</form>

</div>


</body>
</html>