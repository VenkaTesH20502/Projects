<?php
	include_once "connection.php";
	$customer_id=$_GET['customer_id'];
	$sql="DELETE FROM `customerregister` WHERE customer_id='$customer_id' ";
	$qry=mysqli_query($conn,$sql);
	if(!$qry)
		die("Customer details cannot deleted<br>".mysqli_error($cn));
	else
		echo "Customer record deleted ";
?>