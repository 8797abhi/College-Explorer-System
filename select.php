<?php
include_once('php/dbconnect1.php');


$query=mysql_query("select * from colleges where Stream='ANIMATION'");
/*{
	echo "succesful";
	
}*/
$row=mysql_fetch_row($query);


?>