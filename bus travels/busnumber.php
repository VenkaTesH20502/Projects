
<?php
include "connection.php";
if($_POST)
{
	$busnum=$_POST['busno'];
	
	$sql="INSERT INTO `busnumber`( `Bus Number`) VALUES ('$busnum')";
	$retval=mysqli_query($conn,$sql);
	if(!$retval)
		die("Data Not Inserted".mysqli_error($conn));
	else
		echo"Table data Inserted successfully<br>";
}
?>