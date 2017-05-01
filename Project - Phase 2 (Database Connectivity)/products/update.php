<?php
require ('../requires/connection.php');
		$productId = $_POST['productId'];
		$productName = $_POST['productName'];
		
		$query1 = "SELECT * from products where productId='$productId' ";
		$run = mysqli_query($con, $query1);		  
		
		while ($row=mysqli_fetch_assoc($run)) 
		{
		    $a = $row['productId'];
		}
		
		if (isset($a)) 
		{
			echo "ID exists in database";
			$query2 = "UPDATE products SET  productName='$productName'  where productId='$productId' ";
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