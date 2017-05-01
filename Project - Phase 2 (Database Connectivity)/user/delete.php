<?php
require ('../requires/connection.php');
		$userId = $_POST['userId'];
		
		
		$query1 = "SELECT * from admin_user where userId='$userId' ";
		$run = mysqli_query($con, $query1);		  
		
		while ($row=mysqli_fetch_assoc($run)) 
		{
		    $a = $row['userId'];
		}
		
		if (isset($a)) 
		{
			echo "Data is present against this ID";
			$query2 = "DELETE from admin_user where userId='$userId' ";
			$r = mysqli_query($con,$query2);
			if ($r) {
				echo "<br> Data delete successfullly";
			}
			else {
				echo "Something went wrong, Try Again";
			}
		}
		else
		{
			echo "No data found";
		}
?>




