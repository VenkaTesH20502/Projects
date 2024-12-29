<?php
   include"connection.php";
   $sql="Select * from busroute";
   $qry=mysqli_query($conn,$sql);
   if(!$qry)
	   die("Data cannot be retrieved <br>".mysqli_error($conn));
   else
	   echo "Data retrieved successfully<br>";
   $red=mysqli_fetch_array($qry);
   if(!$red)
	   die("No records found<br>".mysqli_error($conn));
   ?>
   <html><body><table border=3>
   <tr><th>S.No</th><th>Bus Number</th><th>Boarding Point</th><th>Destination Point</th><th>Departure Date</th><th>Departure Time</th><th>Cost</th><th>Modify</th></tr>
   <?php
   $i=1;
   do{
	   ?>
	   <tr><td><?php echo $i;?></td>
	   <td><?php echo $red['Bus Number'];?></td> 
	    <td><?php echo $red['Boarding Point'];?></td> 
		 <td><?php echo $red['Destination Point'];?></td> 
		  <td><?php echo $red['Departure Date'];?></td> 
		   <td><?php echo $red['Departure Time'];?></td> 
		   <td><?php echo $red['cost'];?></td> 
		 <td><a href="editroute.php?route_id=<?php echo $red['route_id'];?>"/>EDIT</a>
		  <a href="delete.php?route_id=<?php echo $red['route_id'];?>"/>DELETE</a>	</td>
</tr>
<?php
$i++;
   }while($red=mysqli_fetch_array($qry));
   mysqli_close($conn);
?>