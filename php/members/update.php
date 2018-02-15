<?php
	include_once('dbconnect.php');
	$query="UPDATE members SET age=54 WHERE fname='James'";
	if(mysql_query($query,$con))
	{
			echo "successful";
	}
	
?>