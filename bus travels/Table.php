<?php
   include"connection.php";
   
   $sql="CREATE TABLE if not exists ticketbooking
   (
      frompl varchar(50) NOT NULL,
      topl varchar(50) NOT NULL,
      journey date NOT NULL)";
   $retval=mysqli_query($conn,$sql);
   if(!$retval)
      die("Table not created".mysqli_error($conn));
   else
      echo"table created successfully<br>";
  
  $sql2="CREATE TABLE if not exists customerregister(
      customername varchar(50) NOT NULL,
      phonenumber int(10) NOT NULL,
	  emailaddress varchar(50) NOT NULL,
	  password varchar(20) NOT NULL,
      address varchar(50) NOT NULL)";
   $retval2=mysqli_query($conn,$sql2);
   if(!$retval2)
      die("Table not created".mysqli_error($conn));
   else
      echo"table created successfully<br>";
?>