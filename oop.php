<?php
class Student{
	public $name;
	public $age; 


public function __construct($name, $age){
	$this->name =$name;
	$this->age=$age;
}

	public function getName(){
		return $this->name;
	}

	public function getAge(){
		return $this->age;
	}
}


$ram = new Student("Ram" ,22);
echo "Student name is:" . $ram->getName() . "<hr>" ."Age:" .$ram->getAge();

$shyam = new Student("Sita" ,18);

echo '<hr>';
echo '<hr>';


//class Teacher{
	//public $name = "Shyam";
//}

$objectStudent= new Student($name , $age);
echo "Student's Name:" . $objectStudent->name;
echo "<hr>";

//$objectTeacher = new Teacher();
// echo "Teacher's name:" . $objectTeacher->name;


?>