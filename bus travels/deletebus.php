<?php
	include_once "connection.php";
	$bus_id=$_GET['bus_id'];
	$sql="DELETE FROM `busnumber` WHERE bus_id='$bus_id' ";
	$qry=mysqli_query($conn,$sql);
	if(!$qry)
		die("Buses detail cannot deleted<br>".mysqli_error($cn));
	else
		echo "Buses record deleted ";
?>