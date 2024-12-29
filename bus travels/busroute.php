<?php
include "connection.php";
if($_POST)
{
	$busnum=$_POST['busno'];
	$borpt=$_POST['bopnt'];
	$despt=$_POST['depnt'];
	$depdt=date("y-m-d",strtotime($_POST['ddate']));
	$deptm=$_POST['dtime'];
	$cost=$_POST['cost'];
	$sql="INSERT INTO `busroute`(`Bus Number`, `Boarding Point`, `Destination Point`, `Departure Date`, `Departure Time`,`Cost`) VALUES ('$busnum','$borpt','$despt','$depdt','$deptm','$cost')";
	$retval=mysqli_query($conn,$sql);
	if(!$retval)
		die("Data Not Inserted".mysqli_error($conn));
	else
		echo"Table data Inserted successfully<br>";
}
?>