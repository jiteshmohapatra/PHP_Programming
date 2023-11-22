<?php

class member{

public $name;
public $age;
public $phone;
public $address;
public $salary;
public function printsalary(){
   echo "the salary is " .$this->salary;
}

}

$obj1 = new member;
$obj1->salary = 10000;
echo $obj1->printsalary();
print "<br>";
class employee extends member{
    public $specialization;
    
}
class manager extends member{
    public $department; 
 }
 $a1 = new employee;
 $a1->name = "jitesh";
 $a1->age = 24;
 $a1->phone = 9348998989;
 $a1->address = "bhubaneswer";
 $a1->salary = 15000;
$a1->printsalary();
print"<br>";

$a2 = new manager;
$a2->name = "raja";
$a2->age = 25;
$a2->phone = 9658998989;
$a2->address = "cuttuck";
$a2->salary = 16000;
$a2->printsalary();



?>