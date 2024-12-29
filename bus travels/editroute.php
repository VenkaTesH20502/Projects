<?php
 include "connection.php";
 $route_id=$_GET['route_id'];
 $sql=" Select * from busroute where route_id='$route_id' ";
 $qry=mysqli_query($conn,$sql);
 $rcd=mysqli_fetch_array($qry);
?>
<html>
<body>
<form action="updateroute.php" method="POST">
<table align="center"><tr><td><h4>Bus Number</h4></td></tr>
<table align="center"><tr><td><input type=text name=busno value=<?php echo $rcd['Bus Number']; ?> ></td></tr>
<table align="center"><tr><td><h4>Boarding Point</h4></td></tr>
<table align="center"><tr><td><input type=text name=bopnt value=<?php echo $rcd['Boarding Point']; ?> ></td></tr>
<table align="center"><tr><td><h4>Destination Point</h4></td></tr>
<table align="center"><tr><td><input type=text name=depnt value=<?php echo $rcd['Destination Point']; ?> ></td></tr>
<table align="center"><tr><td><h4>Departure Date</h4></td></tr>
<table align="center"><tr><td><input type=text name=ddate value=<?php echo $rcd['Departure Date']; ?> ></td></tr>
<table align="center"><tr><td><h4>Departure Time</h4></td></tr>
<table align="center"><tr><td><input type=text name=dtime value=<?php echo $rcd['Departure Time']; ?> ></td></tr>
<table align="center"><tr><td><h4>Cost</h4></td></tr>
<table align="center"><tr><td><input type=text name=cost value=<?php echo $rcd['cost']; ?> ></td></tr>	

<table align="center"><tr><td><input type=text name=route_id value="<?php echo $rcd['route_id']; ?>"hidden/></td></tr>		
		<table align="center"><tr><td><input type=submit name=updateroute value="Update"></td></tr>
	</table>
	</body>
	</body>
</html>
