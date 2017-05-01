<?php
error_reporting(0);
$con = mysqli_connect('localhost', 'root', '', 'crud_database');
if (!$con) {
		echo"connection faild";
	}
return $con;
?>