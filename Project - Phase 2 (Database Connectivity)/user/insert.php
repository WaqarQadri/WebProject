<!DOCTYPE html>
<html>
		<head>
				<title>php</title>
		</head>
<body>

<form  method="POST" action="data.php">
<table border="2" cellpadding="15" bgcolor="#E6E6FA">




<tr>
	<td align="right"><b>userId:</b></td>
	<td><input style="width:250px;height:24px;size:18px;border-radius:5px;" type="text" name="userId" placeholder="Enter your ID" required/>
    </td>
</tr>

<tr>
	<td align="right"><b>Name:</b></td>
	<td><input style="width:250px;height:24px;size:18px;border-radius:5px;" type="text" name="userName" placeholder="enter your name"          required/></td>
</tr>

<tr>
	<td align="right"><b>Password:</b></td>
	<td><input style="width:250px;height:24px;size:18px;border-radius:5px;" type="password" name="userPassword" placeholder="enter password"          required/></td>
</tr>

<tr align="center">
	<td colspan="2">
		<input style="width:150px;height:30px;font-size:18px;border-radius:20px;" type="submit" name="submit" value="Done" />
	</td>
</tr>

</table>
</form>

</body>
</html>




<?php
require ('../requires/connection.php');

?>