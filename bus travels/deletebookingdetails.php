<?php
	include_once "connection.php";
	$book_id=$_GET['book_id'];
	$sql="DELETE FROM `seatstatus` WHERE book_id='$book_id' ";
	$qry=mysqli_query($conn,$sql);
	if(!$qry)
		die("Booking details cannot deleted<br>".mysqli_error($cn));
	else
		echo "Booking details deleted ";
?>