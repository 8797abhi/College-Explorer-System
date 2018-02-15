<?php
include_once('php/dbconnect1.php');


$query=mysql_query("select * from colleges where Stream='ANIMATION'");
/*{
	echo "succesful";
	
}*/
?>
<html>
<body bgcolor="grey">
<hr>
<table width = "100%" height = "10%" border="2"  > 
<th ><a href="home.html"><h3>HOME</h3></a> </th>
<th><a href="about.html"><h3>ABOUT</h3></a></th>
<th background="images/back.jpg"><a href="college.html"><h3>COLLEGES</h3></a></th>
<th><a href="contact.html"><h3>CONTACT</h3></a></th>
<th><a href="signup.html"><h5>SIGN UP</h3></a> </th>
<th><a href="login.html"><h5>LOGIN</h3></a> </th>
</table>
<hr>
<center>
<table border="2"   style="width:800px; background: linear-gradient(-90deg, red, yellow); border-radius: 25px;" cellpadding="5" cellspacing="10">
	<tr  >
		<td colspan=5><center><strong>Top Colleges For Animation </strong></center></td>
	</tr>
	<tr>
		<td><strong>Rank</strong></td>
		<td><strong>College Name</strong></td>
		<td><strong>College Address</strong></td>
		<td><strong>College Phone Number</strong></td>
		<td><strong>College Website</strong></td>
	</tr>
	<?php while($row=mysql_fetch_row($query)){?>
	<tr>
		<td><?php echo $row[0];?></td>
		<td><?php echo $row[2];?></td> 
		<td><?php echo $row[3];?></td>
		<td><?php echo $row[4];?></td>
		<td><a href="<?php echo $row[5];?>">Click Here</a></td>
	</tr>
	<?php }?>
	
</table>
</center>

</body>
</html>
