<?php
		$host="localhost";
		$user="root";
		$pass="";
$con=mysql_connect($host,$user,$pass);
	
	$db=mysql_select_db("student",$con);
	if(!$db)
	{

	
	//mysql_close($con);

		echo "Not Connecteed";
	}
	
	?>