<?php
include_once('dbconnect.php');	
	$query="insert into members values('Abhishek','Agarwal',23,'2015-12-17');";
if(mysql_query($query,$con))
{
	echo "successful";
}
$query="insert into members values('Abhi','Bajaj',25,'2017-10-19');";
if(mysql_query($query,$con))
{
	echo "successful";
}
$query="insert into members values('James','Joseph',21,'2012-11-18');";
if(mysql_query($query,$con))
{
	echo "successful";
}
$query="insert into members values('Manish','Raj',20,'2015-10-10');";
if(mysql_query($query,$con))
{
	echo "successful";
}$query="insert into members values('Abhishek','Tigga',24,'2014-11-11');";
if(mysql_query($query,$con))
{
	echo "successful";
}


?>