<html>
<body>
<table>
<form method="post" action="viewcustomerdetailsbycustomer.php">
<td>Enter Your Phone Number <input type=text name="phoneno"/></td></tr>
<tr><td><input type=submit name="view" value="VIEW"/></td></tr>
</form>
</table>
</body>
</html>
<?php
if($_POST)
{
	include"connection.php";
	$phonenum=$_POST['phoneno'];
	$sql="select * from customerregister WHERE `phonenumber`='$phonenum'";
	$qry=mysqli_query($conn,$sql);
	if(!$qry)
		die("data cannot be retrieved<br>".mysqli_error($conn));
	else
		echo "data retreived successfully";
	$rcd=mysqli_fetch_array($qry);
	if(!$rcd)
		die("no records found".mysqli_error($conn));

?>
<html>
<body>
<table border=3>
<tr><th>s.no</th>
  <th>Customer Name</th>
  <th>Phone Number</th>
  <th>Email Id	</th>
  <th>Password	</th>
  <th>Address</th>
  <th>Modify</th>
  </tr>
  <?php
     $i=1;
	 do
	 {
  ?>
  <tr>
  <td><?php echo $i;?></td>
  <td><?php echo $rcd['customername'];?></td>
  <td><?php echo $rcd['phonenumber'];?></td>
  <td><?php echo $rcd['emailaddress'];?></td>
  <td><?php echo $rcd['password'];?></td>
  <td><?php echo $rcd['address'];?></td>
 <td><a href="editcusdetails.php?customer_id=<?php echo $red['customer_id'];?>"/>EDIT</a>
		  <a href="deletecusdetailsbycustomer.php?customer_id=<?php echo $red['customer_id'];?>"/>DELETE</a>	</td>
  </tr>
  <?php
     $i++;
	 }while($rcd=mysqli_fetch_array($qry));
} 
	?>
</table><br>
<input type=button value=BACK onclick=history.back()>
</body>
</html>