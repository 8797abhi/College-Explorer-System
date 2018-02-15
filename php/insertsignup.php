<?php

include_once('dbconnect1.php');
$unm=$_POST["usrname"];
$eml=$_POST["email"];
$pas=$_POST["pass"];
$cname=$_POST["cntct_name"];
$cadr=$_POST["addr"];
$phn=$_POST["phone"];
$gndr=$_POST["gender"];
$cty=$_POST["city"];
$pcode=$_POST["pincode"];

$query="insert into user_info values('$unm','$eml','$pass','$cname','$cadr',$phn,'$gndr','$cty',$pcode);";
if(mysql_query($query,$con));
{
	echo "successful";
	
}
?>