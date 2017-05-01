<?php
		require ('../requires/connection.php');
		$query = "SELECT * from admin_user";
		$run = mysqli_query($con, $query);		  
		
		while ($row=mysqli_fetch_assoc($run)) 
		{
		    echo $row['userId']."<br>";
			echo $row['userName']."<br><br>";
		}
?>