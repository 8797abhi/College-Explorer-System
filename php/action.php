<?php
session_start();
include_once('dbconnect1.php');
$uname=$_POST["name"];
$pass=$_POST["pass"];
$check_query="select * from user_info where uname='$uname' AND pass='$pass';";
$result=mysql_query($check_query,$con);
if($row=mysql_fetch_row($result))
{
	$_SESSION["cname"]=$row[3];
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	$_SESSION["fav"]=$row[9];
	

}
else
{
	echo "Wrong user Name or Password";
}



?>
