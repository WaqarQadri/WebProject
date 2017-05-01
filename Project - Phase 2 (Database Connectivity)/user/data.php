<?php
		require ('../requires/connection.php');
		
		$userId = $_POST['userId'];
		$userName = $_POST['userName'];
		$userPassword = $_POST['userPassword'];
		
		
		$query = "INSERT INTO admin_user(userId, userName, userPassword)
		       values ('$userId', '$userName', '$userPassword')";
			   
			     $run = mysqli_query($con, $query);
				  
				  if ($run) {
					  echo "Data inserted";
				  }
				  
				  else {
					  echo "data not inserted";
				  } 
?>
<br>
<a href="../Home.html">Home</a>