<?php
include "connection.php";
 if($_POST)
 {

 $busno=$_POST['busno'];
 $bopnt=$_POST['bopnt'];
 $depnt=$_POST['depnt'];
 $ddate=$_POST['ddate'];
 $dtime=$_POST['dtime'];
 $cost=$_POST['cost'];
 $route_id=$_POST['route_id'];
 $qry=mysqli_query($conn,"UPDATE `busroute` SET `Bus Number`='$busno',`Boarding Point`='$bopnt',`Destination Point`='$depnt',`Departure Date`='$ddate',`Departure Time`='$dtime',`cost`='$cost' WHERE `route_id`='$route_id' ");
 if(!$qry)
	die("Not updated".mysqli_error($conn));
 else
	echo"Updation Success";
 }
?> 