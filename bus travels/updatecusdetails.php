<?php
include "connection.php";
 if($_POST)
 {

  $cusname=$_POST['cusname'];
	 $phoneno=$_POST['phoneno'];
	 $emailid=$_POST['emailid'];
	 $address=$_POST['address'];
     $password=$_POST['password'];
	 $customer_id=$_POST['customer_id'];	 
$qry=mysqli_query($conn,"UPDATE `customerregister` SET`customername`='$cusname',`phonenumber`='$phoneno',`emailaddress`='$emailid',`password`='$password',`address`='$address' WHERE  `customer_id`='$customer_id' ");
 if(!$qry)
	die("Not updated".mysqli_error($conn));
 else
	echo"Updation Success";
 }
?> 