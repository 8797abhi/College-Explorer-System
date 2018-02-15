<?php
	class Person
	{
		private $name = "" ;
		
		function get_name()
		{
			//$name="Xyz";
			echo $this->name;
		}
		function set_name($nm)
		{
			$name=$nm;
			//echo $name;
		}
	}
	class Student extends Person
	{
		
	}
	$stu2 = new Student;
	$stu1 = new Person;
	
	//echo $stu1 -> get_name();
	echo $stu1 -> set_name("ABC");
	echo $stu1 -> get_name();
	
?>