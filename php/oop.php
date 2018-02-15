<?php


class test
{
public function __construct()
{
//Your logic for constructor
}
public function __destruct()
{
	
}
public function __call($method_name , $parameter)
{
if($method_name == "overlodedFunction") //Function overloading logic for function name overlodedFunction
{
$count = sizeof($parameter);
$j = 0;
for($i = 0 ;$i < $count;$i++)
{
$j += $parameter[$i]."<br>";
//echo $parameter[1];
}
echo $j . "<br>";
}
$j = 0;
}
}
$a = new test();
$a->overlodedFunction(1,2);
$a->overlodedFunction(1,2,2);
?>