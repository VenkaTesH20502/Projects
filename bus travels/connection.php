<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,'Bus travels');
if(!$conn)
   die("not connected <br>".mysqli_error($conn));
   
   ?>  