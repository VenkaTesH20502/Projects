<?php
include"connection.php";
if(isset($_POST))
{
  $from=$_POST['fromm'];
  $to=$_POST['too'];
  $journey=date("y_m_d",strtotime($_POST['journey']));
  $sql="INSERT INTO `ticketbooking`(`frompl`, `topl`, `journey`) VALUES ('$from','$to','$journey')";
  $retval=mysqli_query($conn,$sql);
  if(!$retval)
    die("Ticket booking unsucessfull".mysqli_error($conn));
  else
    echo "Ticket booking sucessfull<br>";
}
?> 