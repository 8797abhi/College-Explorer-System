<html>
<body>

<?php
   
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "student";
   
	$con = mysql_connect($dbhost, $dbuser,$dbpass)
		or die("Could not connect to Database: " . mysql_error());
   
	echo ("MYSQL Connected successfully"."<br>");
   
	$db_sql = "CREATE Database memb";
	if(mysql_query($db_sql,$con))
	{
		echo ("Database members created successfully"."<br>");
	}
	else
	{
		echo("Database Not Created"."<br>");
	}
	
	$db_select = mysql_select_db("memb",$con);
	if($db_select)
	{
		echo ("Database Selected successfully"."<br>");
	}
	else
	{
		echo("Couldn't Select Database"."<br>");
	}
	
	//sql to create table
	$sql_table = "CREATE TABLE member_data ( 
	fname VARCHAR(30) NOT NULL,
	lname VARCHAR(30) NOT NULL,
	age INTEGER(3),
	doj date );";
	
	if(mysql_query($sql_table,$con))
	{
		echo("Table Created Successfully"."<br>");
	}
	else
	{
		echo("Table Not Created. Error : " . mysql_error() ."<br>");
	}
	
	$sql_insert = "INSERT INTO member_data VALUES ('Monisha' , 'Surana', 19,'1998-01-19');";
	
	if(mysql_query($sql_insert,$con))
	{
		echo("Data Inserted Successfully"."<br>");
	}
	else
	{
		echo("Data Not Inserted"."<br>");
	}
	$sql_insert = "INSERT INTO member_data VALUES ('Nikhil' , 'Jain', 21,'1996-04-26');";
	
	if(mysql_query($sql_insert,$con))
	{
		echo("Data Inserted Successfully"."<br>");
	}
	else
	{
		echo("Data Not Inserted"."<br>");
	}
		$sql_insert = "INSERT INTO member_data VALUES ('fnoob' , 'Agarwal', 21,'1998-02-04');";
	
	if(mysql_query($sql_insert,$con))
	{
		echo("Data Inserted Successfully"."<br>");
	}
	else
	{
		echo("Data Not Inserted"."<br>");
	}
		$sql_insert = "INSERT INTO member_data VALUES ('James' , 'Joy', 20,'1997-02-20');";
	
	if(mysql_query($sql_insert,$con))
	{
		echo("Data Inserted Successfully"."<br>");
	}
	else
	{
		echo("Data Not Inserted"."<br>");
	}
		$sql_insert = "INSERT INTO member_data VALUES ('Mudit' , 'Surana', 17,'2000-04-28');";
	
	if(mysql_query($sql_insert,$con))
	{
		echo("Data Inserted Successfully"."<br>");
	}
	else
	{
		echo("Data Not Inserted"."<br>");
	}
	
	
	$update_age = "UPDATE member_data SET age=54 WHERE fname='James'";
	if(mysql_query($update_age,$con))
	{	
		echo("Age Updated Successfully"."<br>");
	}
	else
	{
		echo("Age Can't be Updated"."<br>");
	}
	
	
	$delete_age ="DELETE FROM member_data WHERE age > 60";
	if(mysql_query($delete_age,$con))
	{	
		echo("Age Deleted Successfully"."<br>");
	}
	else
	{
		echo("Age Can't be Deleted"."<br>");
	}

	 //SELECT * FROM member_data ORDER BY fname ASC;
	
	mysql_close($con);
?>

</body>
</html>