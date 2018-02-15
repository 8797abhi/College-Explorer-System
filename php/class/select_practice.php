<?php
include('dbconnect_practice.php');
$query="select * from user_info;";
$result=mysql_query($query,$con);
$i = sizeof($result);
echo $i;
while($row = mysql_fetch_row($result))
{
	$i = count($row)."<br>";
echo $i;
echo $row[0]."<br>";
echo $row[1] ."<br>";
}
?>