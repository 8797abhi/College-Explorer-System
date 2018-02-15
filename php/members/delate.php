<?php
	include_once('dbconnect.php');
	$query="DELETE FROM members WHERE age > 60";
	if(mysql_query($query,$con))
	{
			echo "successful";
	}
	
?>