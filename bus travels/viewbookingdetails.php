<?php
   include"connection.php";
   $sql="Select * from seatstatus";
   $qry=mysqli_query($conn,$sql);
   if(!$qry)
	   die("Data cannot be retrieved <br>".mysqli_error($conn));
   else
	   
   $red=mysqli_fetch_array($qry);
   if(!$red)
	   die("No records found<br>".mysqli_error($conn));
   ?>
   <html><body><table border=3>
   <tr><th>S.No</th><th>Customername</th><th>Phonenumber</th><th>Email Id</th><th>Bus Number</th><th>Boarding Point</th><th>Destination Point</th><th>Departure Date</th><th>Departure Time</th><th>Amount</th><th>Total No. Of seats</th><th>Modify</th>
  
 
   <?php
   $i=1;
   do{
	   ?>
	   <tr><td><?php echo $i;?></td>                                	
   <td><?php echo $red['customer name'];?></td> 
	    <td><?php echo $red['phone number'];?></td> 
		 <td><?php echo $red['email'];?></td> 
		 <td><?php echo $red['Bus Number'];?></td> 
		  <td><?php echo $red['boarding point'];?></td> 
		   <td><?php echo $red['destination point'];?></td> 
 <td><?php echo $red['date'];?></td>
 <td><?php echo $red['Travel Time'];?></td>
 <td><?php echo $red['amount'];?></td>   
 <td><?php echo $red['seat'];?></td> 
		 <td><a href="cancelbooking.php?book_id=<?php echo $red['book_id'];?>"/>CANCEL</a>
		  <a href="deletebookingdetails.php?book_id=<?php echo $red['book_id'];?>"/>DELETE</a>	</td>
</tr>
<?php
$i++;
   }while($red=mysqli_fetch_array($qry));
   mysqli_close($conn);
?>
