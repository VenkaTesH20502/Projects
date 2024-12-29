<?php
 include "connection.php";
 $bus_id=$_GET['bus_id'];
 $sql=" Select * from busnumber where bus_id='$bus_id' ";
 $qry=mysqli_query($conn,$sql);
 $rcd=mysqli_fetch_array($qry);
?>
<html>
<body>
<form action="updatebus.php" method="POST">
<table align="center"><tr><td><h4>Bus Number</h4></td></tr>
<table align="center"><tr><td><input type=text name=busno value=<?php echo $rcd['Bus Number']; ?> ></td></tr>


<table align="center"><tr><td><input type=text name=bus_id value="<?php echo $rcd['bus_id']; ?>"hidden/></td></tr>		
		<table align="center"><tr><td><input type=submit name=updatebus value="Update"></td></tr>
	</table>
	</body>
	</body>
</html>
