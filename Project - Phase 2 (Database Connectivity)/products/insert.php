<!DOCTYPE html>
<html>
		<head>
				<title>php</title>
		</head>
<body>

<form  method="POST" action="data.php">
<table border="2" cellpadding="15" bgcolor="#E6E6FA">


<tr>
	<td align="right"><b>Id:</b></td>
	<td><input style="width:250px;height:24px;size:18px;border-radius:5px;" type="text" name="productId" placeholder="Enter Product ID" required/> </td>
</tr>

<tr>
	<td align="right"><b>Name:</b></td>
	<td><input style="width:250px;height:24px;size:18px;border-radius:5px;" type="text" name="productName"> </td>
</tr>

<tr>
	<td align="right"><b>Price:</b></td>
	<td><input style="width:250px;height:24px;size:18px;border-radius:5px;" type="text" name="productPrice"></td>
</tr>


<tr>
	<td align="right"><b>code:</b></td>
	<td><input style="width:250px;height:24px;size:18px;border-radius:5px;" type="text" name="productCode"> </td>
</tr>

<tr>
	<td align="right"><b>Stock Availability:</b></td>
	<td><input style="width:250px;height:24px;size:18px;border-radius:5px;" type="text" name="productInstock"> </td>
</tr>

<tr>
	<td align="right"><b>Discount:</b></td>
	<td><input style="width:250px;height:24px;size:18px;border-radius:5px;" type="text" name="productDiscount"> </td>
</tr>

<tr>
	<td align="right"><b>Size:</b></td>
	<td><input style="width:250px;height:24px;size:18px;border-radius:5px;" type="text" name="productSize"> </td>
</tr>

<tr>
	<td align="right"><b>Detail:</b></td>
	<td><input style="width:250px;height:24px;size:18px;border-radius:5px;" type="text" name="productDetails"> </td>
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