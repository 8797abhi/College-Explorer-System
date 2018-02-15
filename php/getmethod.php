<?php 
$unm=$_GET["usrname"];
$eml=$_GET["email"];
$pas=$_GET["pass"];
$cname=$_GET["cntct_name"];
$cadr=$_GET["addr"];
$phn=$_GET["phone"];
$gndr=$_GET["gender"];
$cty=$_GET["city"];
$pcode=$_GET["pincode"];
echo "User Name  ".$unm."<br>";
echo "Email Id ".$eml."<br>";
echo "Password ".$pas."<br>";
echo "Contact Name".$cname."<br>";
echo "Phone Number ".$phn."<br>";
echo "Gender ".$gndr."<br>";
echo "City".$cty."<br>";
echo "Pincode ".$pcode."<br>";

?>