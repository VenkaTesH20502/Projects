<?php
include"connection.php";
if($_POST)
{
	 $cusname=$_POST['cusname'];
	 $phoneno=$_POST['phoneno'];
	 $emailid=$_POST['emailid'];
	 $address=$_POST['address'];
     $password=$_POST['password'];
	 $sql="INSERT INTO `customerregister`(`customername`, `phonenumber`, `emailaddress`, `password`, `address`) VALUES ('$cusname','$phoneno','$emailid','$password','$address')";

	   $qry=mysqli_query($conn,$sql);					
	   if(!$qry)
	   	die("data cannot be inserted into table".mysqli_error($conn));
	   else
	   	echo"data inserted into table sucessfully";	 
}
?>

