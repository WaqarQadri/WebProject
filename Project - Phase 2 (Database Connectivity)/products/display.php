<?php
		require ('../requires/connection.php');
		$query = "SELECT * from products";
		$run = mysqli_query($con, $query);		  
		
		while ($row=mysqli_fetch_assoc($run)) 
		{
		    echo $row['productId']."<br><br>";
			echo $row['productName']."<br>";
			echo $row['productPrice']."<br>";
			echo $row['productDetail']."<br>";
			
		}
?>