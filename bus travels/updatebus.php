<?php
include "connection.php";
 if($_POST)
 {

 $busno=$_POST['busno'];
 $bus_id=$_POST['bus_id'];
 $qry=mysqli_query($conn,"UPDATE `busnumber` SET `Bus Number`='$busno' WHERE `bus_id`='$bus_id' ");
 if(!$qry)
	die("Not updated".mysqli_error($conn));
 else
	echo"Updation Success";
 }
?> 