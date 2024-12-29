<?php
 include "connection.php";
 $customer_id=$_GET['customer_id'];
 $sql=" Select * from customerregister where customer_id='$customer_id' ";
 $qry=mysqli_query($conn,$sql);
 $rcd=mysqli_fetch_array($qry);
?>
<html>
<body>
<form action="updatecusdetails.php" method="POST">
<table align="center"><tr><td><h4>Customer Name</h4></td></tr>
<table align="center"><tr><td><input type=text name=cusname value=<?php echo $rcd['customername']; ?> ></td></tr>
<table align="center"><tr><td><h4>Phone Number</h4></td></tr>
<table align="center"><tr><td><input type=text name=phoneno value=<?php echo $rcd['phonenumber']; ?> ></td></tr>
<table align="center"><tr><td><h4>Email Id</h4></td></tr>
<table align="center"><tr><td><input type=text name=emailid value=<?php echo $rcd['emailaddress']; ?> ></td></tr>
<table align="center"><tr><td><h4>Password</h4></td></tr>
<table align="center"><tr><td><input type=text name=password value=<?php echo $rcd['password']; ?> ></td></tr>
<table align="center"><tr><td><h4>Address</h4></td></tr>
<table align="center"><tr><td><input type=text name=address value=<?php echo $rcd['address']; ?> ></td></tr>

<table align="center"><tr><td><input type=text name=customer_id value="<?php echo $rcd['customer_id']; ?>"hidden/></td></tr>		
		<table align="center"><tr><td><input type=submit name=updateroute value="Update"></td></tr>
	</table>
	</body>
	</body>
</html>
