<?php
require ('../requires/connection.php');
		$userId = $_POST['userId'];
		$userName = $_POST['userName'];
		
		$query1 = "SELECT * from admin_user where userId='$userId' ";
		$run = mysqli_query($con, $query1);		  
		
		while ($row=mysqli_fetch_assoc($run)) 
		{
		    $a = $row['userId'];
		}
		
		if (isset($a)) 
		{
			echo "ID exists in database";
			$query2 = "UPDATE admin_user SET userName='$userName' where userId='$userId' ";
			$r = mysqli_query($con,$query2);
			if ($r) {
				echo "<br> Data updated successfullly";
			}
			else {
				echo "Something went wrong, Try Again";
			}
		}
		else
		{
			echo "ID doesn't exists in database";
		}
?>