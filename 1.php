<?php
session_start();
?>

<html>
<head>
<title> College Explorer System</title>
<script>
function abc()
{	
	var x=prompt("ENter YoUR  Name");
	alert("Welcome "+x);
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<link rel="stylesheet" href="CSS\login.css">
</head>
<?php
if(!isset($_SESSION["cname"]))
{
	
?>
<body bgcolor="grey" onload="abc();">
<hr>
<marquee behavior="alternate" scrolldelay="30"><img src="images/coun.png" align=left  height=100 width=400 ></marquee>
<hr>
<br>



<center>
<img src="images/banner4.jpg"  usemap="#imgmap" style="opacity:1.5;">
</center>
<map name="imgmap">
<area shape=rect coords="627,587,644,604" href="https://www.google.com" alt="xyz" >
<area shape=rect coords="290,46,362,64" href="home.html">
<area shape=rect coords="444,44,525,62" href="about.html">
<area shape=rect coords="663,48,780,61" href="college.html">
<area shape=rect coords="861,42,966,60" href="contact.html">
<area title="" href="signup.html" shape="rect" coords="912,124,1017,141" />
<area title=""  shape="rect" coords="917,167,993,182" onclick="document.getElementById('id01').style.display='block'"/>
<area shape=rect coords="658,567,706,624" href="https://www.wikipedia.org" >
</map>
<br>
<hr>
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="php\action.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>X

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
  </div>
</body>
<?php
}
else if(isset($_SESSION["cname"]) )
{
	$cname=$_SESSION["cname"];
	$fav=$_SESSION["fav"];
?>
<body bgcolor="grey">
<hr>
<table width = "100%" height = "10%" border="2"  > 
<th ><a href="home.html"><h3>HOME</h3></a> </th>
<th><a href="about.html"><h3>ABOUT</h3></a></th>
<th background="images/back.jpg"><a href="college.html"><h3>COLLEGES</h3></a></th>
<th><a href="contact.html"><h3>CONTACT</h3></a></th>
<th><h5>Welcome <?php echo $cname?></h3> </th>
<th><a href="php/logout.php"><h5>LOGOUT</h3></a> </th>
</table>
Your Selected stream is <?php echo $_COOKIE[$fav]; ?>
<?php
}
?>
</html>