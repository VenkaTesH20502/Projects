<?php
   include"connection.php";
   $sql="Select * from customerregister";
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
   <tr><th>S.No</th><th>customername</th><th>phonenumber</th><th>emailaddress</th><th>password</th><th>address</th><th>Modify</th></tr>
   <?php
   $i=1;
   do{
	   ?>
	   <tr><td><?php echo $i;?></td>
	   <td><?php echo $red['customername'];?></td> 
	    <td><?php echo $red['phonenumber'];?></td> 
		 <td><?php echo $red['emailaddress'];?></td> 
		  <td><?php echo $red['password'];?></td> 
		   <td><?php echo $red['address'];?></td> 
		 <td><a href="editcusdetails.php?customer_id=<?php echo $red['customer_id'];?>"/>EDIT</a>
		  <a href="deletecusdetails.php?customer_id=<?php echo $red['customer_id'];?>"/>DELETE</a>	</td>
</tr>
<?php
$i++;
   }while($red=mysqli_fetch_array($qry));
   mysqli_close($conn);
?>