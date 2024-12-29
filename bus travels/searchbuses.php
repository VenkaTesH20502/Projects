<?php
include "connection.php";

	session_start();
	$name=$_SESSION["name"];
	$phonenumber=$_SESSION["phonenumber"];
	
if(isset($_POST))
{
	$BoardingPoint=$_POST['fromm'];
	$DestinationPoint=$_POST['too'];
	$DepartureDate=$_POST['journey'];
	$sql="SELECT * FROM `busroute` WHERE `Boarding Point`='$BoardingPoint' AND `Destination Point`='$DestinationPoint' AND `Departure Date`='$DepartureDate' ";
	$qry=mysqli_query($conn,$sql);
	$retval=mysqli_fetch_array($qry);
	
	
?>
	<html>
	<body>
	<form>
	<?php
	 if(!$retval)
	 {
		  echo "<br><br><b><u>SORRY, THERE IS NO BUSES AVAILABLE. THANK YOU</u></b><br><br>";
	 }
	else
	{
		?>
	Customer Name:<input type="text" name="cusname" value="<?php echo "$name"; ?>" disabled />
	Phone Number :<input type="text" name="phoneno" value="<?php echo "$phonenumber"; ?>" disabled />
	<table border=3 width=100% >
	<center> AVAILABLE BUSES</center>
	<th>S.NO<th>Bus Number</th><th>Boarding Point</th><th>Destination Point</th><th>Departure Date</th><th>Departure Time</th><th>Cost</th>
		<?php
		$i=1;
		do{
		?>
		<tr>
		<td><?php echo $i;							?></td>
		<td><?php echo $retval['Bus Number'];		?></td>
		<td><?php echo $retval['Boarding Point'];	?></td>
		<td><?php echo $retval['Destination Point'];?></td>
		<td><?php echo $retval['Departure Date'];	?></td>
		<td><?php echo $retval['Departure Time'];	?></td>
		<td><?php echo $retval['cost'];			    ?></td>
		
	
		</tr>
		<?php
		$i++;
		}while($retval=mysqli_fetch_array($qry));	
	}
}  
?>
</table>
<table>
<tr><td><input type="button" class="bkbutton" value="back" onclick="history.back()"></td></tr>
</table>
</form>
</body>
</html><br><br>
