<?php 
	$conn = mysqli_connect("blog-a-thon.mysql.database.azure.com", "vaidehi@blog-a-thon", "privacy@1234", "blogger");
	if (!$conn)
	{
		die("Connection Failed.." .mysqli_connect_error());
	}
	else 
	{
			# code...
		//echo("Connection Successful");
		
	}	
?>