<?php
include"connection.php";
if(isset($_POST))
{
  $seatpl=$_POST['seat'];
  $busno=$_POST['bus'];
$date=$_POST['tdate'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$time=$_POST['ttime'];
$amount=$_POST['amt'];
$bordpoint=$_POST['bpnt'];
$destpoint=$_POST['depnt'];


    $sql="INSERT INTO `seatstatus`(`seat`, `Bus Number`, `date`, `customer name`, `phone number`, `boarding point`, `destination point`, `Travel Time`, `amount`,) VALUES('$seatpl','$busno','$date','$name','$phone','$bordpoint','$destpoint','$time','$amount')";
  $retval=mysqli_query($conn,$sql);
  if(!$retval)
    die("seat booked unsucessfull".mysqli_error($conn));
  else
    echo "seat booked sucessfull and seat will be alloted by admin and send it to ur email<br>";

}
?> 
<html>
<p align="left"><a href="payment.html">Payment </a></p>
</html>
