<?php
	include_once "connection.php";
	$route_id=$_GET['route_id'];
	$sql="DELETE FROM `busroute` WHERE route_id='$route_id' ";
	$qry=mysqli_query($conn,$sql);
	if(!$qry)
		die("Buses detail cannot deleted<br>".mysqli_error($cn));
	else
		echo "Buses record deleted ";
?>