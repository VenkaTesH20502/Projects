<html>
<body>
<table>
<form method="post" action="tripleview.php">


<td>Departure Date                             <input type=text name="bopnt"/></td></tr>
<td>Departure Date                             <input type=text name="depnt"/></td></tr>
<td>Departure Date                             <input type=text name="ddate"/></td></tr>
<tr><td><input type=submit name="search" value="Search"/></td></tr>
</form>
</table>
</body>
</html>
<?php
if($_POST)
{
	include"connection.php";
	$bopnt=$_POST['bopnt'];
	$depnt=$_POST['depnt'];
	$depdt=date("y-m-d",strtotime($_POST['ddate']));
	$sql="select * from busroute WHERE `Boarding Point`='$bopnt'";
	$sql1="select * from busroute WHERE `Destination Point`='$depnt'";
	$sql2="select * from busroute WHERE `Departure Date`='$depdt'";
	$qry=mysqli_query($conn,$sql);
	$qry1=mysqli_query($conn,$sql1);
	$qry2=mysqli_query($conn,$sql2);
	if(!$qry && !$qry1 &&!$qry2 )
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
  <th>Bus Number</th>
  <th>Boarding Point</th>
  <th>Destination Point</th>
  <th>Departure Date</th>
  <th>Departure Time</th>
  <th>Cost</th>
  </tr>
  <?php
     $i=1;
	 do
	 {
  ?>
  <tr>
  <td><?php echo $i;?></td>
  <td><?php echo $rcd['Bus Number'];?></td>
  <td><?php echo $rcd['Boarding Point'];?></td>
  <td><?php echo $rcd['Destination Point'];?></td>
  <td><?php echo $rcd['Departure Date'];?></td>
  <td><?php echo $rcd['Departure Time'];?></td>
 <td><?php echo $rcd['cost'];?></td>
  </tr>
  <?php
     $i++;
	 }while($rcd=mysqli_fetch_array($qry));
} 
	?>
</table><br>
<input type=button value=back onclick=history.back()>
</body>
</html>