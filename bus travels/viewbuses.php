<?php
   include"connection.php";
   $sql="Select * from busnumber";
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
   <tr><th>S.No</th><th>Bus Number</th><th>Modify</th></tr>
   <?php
   $i=1;
   do{
	   ?>
	   <tr><td><?php echo $i;?></td>
	   <td><?php echo $red['Bus Number'];?></td> 
	    
		 <td><a href="editbus.php?bus_id=<?php echo $red['bus_id'];?>"/>EDIT</a>
		  <a href="deletebus.php?bus_id=<?php echo $red['bus_id'];?>"/>DELETE</a>	</td>
</tr>
<?php
$i++;
   }while($red=mysqli_fetch_array($qry));
   mysqli_close($conn);
?>
