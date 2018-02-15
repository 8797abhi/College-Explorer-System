<?php
include_once('dbconnect.php');	
	$query="create table members(fname varchar(30) ,lname varchar(30),age INT(2),DOJ date);";
if(mysql_query($query,$con))
{
	echo "successful";
}


?>