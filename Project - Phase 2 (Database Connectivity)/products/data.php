<?php
		require ('../requires/connection.php');
		
		$productId = $_POST['productId'];
		$productName = $_POST['productName'];
		$productPrice = $_POST['productPrice'];
		$productCode = $_POST['productCode'];
		$productInstock = $_POST['productInstock'];
		$productDiscount = $_POST['productDiscount'];
		$productSizes = $_POST['productSizes'];
		$productDetails = $_POST['productDetails'];
		
		
	$query = "insert into products(productId, productName, productPrice, productCode, productInstock, productDiscount, productSizes, productDetails)
	       values ('$productId', '$productName', '$productPrice', '$productCode', '$productInstock', '$productDiscount', '$productSizes', '$productDetails')";
			   
			     $run = mysqli_query($con, $query);
				  
				  if ($run) {
					  echo "Data inserted";
				  }
				  
				  else {
					  echo "data not inserted";
				  } 
?>