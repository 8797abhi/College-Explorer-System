<?php
	$host="localhost";
	$user="root";
	$pass="student";
	$con=mysql_connect($host,$user,$pass);
	$db=mysql_select_db("wtlab",$con);
	if(!$db)
	{
		echo "Not Connecteed";
	}
?>