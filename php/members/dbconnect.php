<?php
		$host="localhost";
		$user="root";
		$pass="student";
$con=mysql_connect($host,$user,$pass);
	
	$db=mysql_select_db("members",$con);
	if(!$db)
	{

	
	//mysql_close($con);

		echo "Not Connecteed";
	}
	
	?>