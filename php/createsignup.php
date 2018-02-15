<?php
include_once('dbconnect1.php');	
	$query="create table user_info(uname varchar(4),email varchar(50),pass varchar(15),cname varchar(50),caddr varchar(100),phno INT ,gender varchar(6),city varchar(20),pcode INT);";
if(mysql_query($query,$con))
{
	echo "successful";
}


?>