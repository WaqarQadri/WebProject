<?php
require("requires/connection.php");

$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

		// To protect MySQL injection (more detail about MySQL injection)
		//$encriptedPass=md5($mypassword);
		
		$sql="SELECT * FROM admin_user WHERE userName='$myusername' and userPassword='$mypassword'";
		$result=mysqli_query($con,$sql);
		
		// Mysql_num_row is counting table row
		$count=mysqli_num_rows($result);
		
		// If result matched $myuseqrname and $mypassword, table row must be 1 row
		if($count==1)
		{
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		session_start();
		
		$_SESSION['userName']=$myusername;
		$_SESSION['userPassword']=$encriptedPass;
		
		header("Location: Produts.html");
		exit( );
		}
		else 
		{
		echo "Wrong Username or Password";
		}


?>