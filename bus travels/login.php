<?php
	include "connection.php";
	
	if(isset($_POST))
	{
		$user=$_POST["user"];
		$pass=$_POST["pass"];
		if($pass == "Pitcheen")
		{
		
			include "admin1.php";
		}
		else 
			echo"B Y E  B Y E  !!";
	}
?>