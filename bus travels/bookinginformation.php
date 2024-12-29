<html>
<body>
<table>
<form method="post" action="bookinginformation.php">
<td>Enter Your Phone Number <input type=text name="phone"/><br><br></td></tr>
<tr><td><input type=submit name="view" value="VIEW BOOKING INFORMATION"/></td></tr>
</form>
</table>
</body>
</html>
<?php
if($_POST)
{
	include"connection.php";
	$phonenum=$_POST['phone'];
	$sql="select * from `seatstatus` WHERE `phone number`='$phonenum'";
	$qry=mysqli_query($conn,$sql);
	if(!$qry)
		die("data cannot be retrieved<br>".mysqli_error($conn));
	else
		
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
  <th>Email</th>
  <th>Bus Number	</th>
<th>Boarding Point	</th>
<th>Destination Point</th>
  <th>Departure Date	</th>
  <th>Departure Time</th>
  <th>No. Of Seats</th>
<th>Amount</th>
  </tr>
  <?php
     $i=1;
	 do
	 {
  ?>
  <tr>
  <td><?php echo $i;?></td>
  <td><?php echo $rcd['customer name'];?></td>
  <td><?php echo $rcd['phone number'];?></td>
  <td><?php echo $rcd['Bus Number'];?></td>
  <td><?php echo $rcd['boarding point'];?></td>
  <td><?php echo $rcd['destination point'];?></td>
 <td><?php echo $rcd['date'];?></td>
  <td><?php echo $rcd['Travel Time'];?></td>
<td><?php echo $rcd['seat'];?></td>
  <td><?php echo $rcd['amount'];?></td>
  <td><?php echo $rcd['email'];?></td>

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