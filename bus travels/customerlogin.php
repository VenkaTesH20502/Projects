<?php
session_start();
	include "connection.php";
	if(isset($_POST))
	{
		$cusname=$_POST["name"];
		$phoneno=$_POST["phonenumber"];
		$password=$_POST["password"];
		$sql="SELECT * FROM customerregister WHERE customername='$cusname'"; 
		$qry=mysqli_query($conn,$sql);
		$retval=mysqli_fetch_array($qry);
		if(!$retval)
			die("User Not found".mysqli_error($conn));
		if($password==$retval['password'])
		{
			echo"Login successfull<br>";
			$_SESSION["name"]=$_POST["name"];
			$_SESSION["phonenumber"]=$_POST["phonenumber"];
			include "ticketbooking.html";
		}
		else
		{
			echo"Login Unsuccessful<br>";
		}

		$retval=mysqli_query($conn,$sql);
		
	}
?>