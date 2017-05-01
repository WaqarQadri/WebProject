<?php
require ('../requires/connection.php');
		$productId = $_POST['productId'];
		
		
		$query1 = "SELECT * from products where productId='$productId' ";
		$run = mysqli_query($con, $query1);		  
		
		while ($row=mysqli_fetch_assoc($run)) 
		{
		    $a = $row['productId'];
		}
		
		if (isset($a)) 
		{
			echo "Data is present against this ID";
			$query2 = "DELETE from products where productId='$productId' ";
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




