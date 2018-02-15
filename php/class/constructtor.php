<?php
 
class demo
 
{
 
/*function  __construct()
 
{
 
echo  "object is initializing their propertie"."<br/>";
 
}
		*/
function work()
 
{
 
echo  "Now works is going "."<br/>";
 
}
		
 
function __destruct()
 
{
 
echo  "after completion the work,  object  destroyed automatically";
 
}
 
}
	
$obj= new demo();
echo is_object($obj); 
$obj->work();
	
//to check object is destroyed or not
echo is_object($obj);
echo is_object($obj);
?>