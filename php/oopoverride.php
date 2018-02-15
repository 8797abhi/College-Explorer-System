<html>
<body>

<?php

class Person
{
	var $name;
	
	function get_name()
	{
		echo $this->name;
		
		echo ": This is inside Parent Class"."<br>"."<br>";
	}
	function set_name($nm)
	{
		$this->name=$nm;
	}
}

class Student extends Person
{
	var $nme;
	
	function get_sname()
	{
		echo $this->nme;
		echo ": This is inside Dervied Class"."<br>"."<br>";
	}
	function set_sname($nm)
	{
		$this->nme=$nm;
	}
	
	function set_name($nm)
	{
		$this->nme = $nm;
	}
	function get_name()
	{
		echo $this->nme;
		echo ": This is Inside Derived Class value taken by Parent Class"."<br>"."<br>";
		
	}
}

$stu1 = new Person;
$stu1->set_name("Base");

$stu1->get_name();

$stu2 = new Student;
$stu3 = new Student;

$stu2->set_sname("Derived");
$stu2->get_sname();

$stu3->set_name("Derived");
$stu3->get_name();


?>
</body>
</html>