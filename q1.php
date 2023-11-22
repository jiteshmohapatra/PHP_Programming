<?php 


class Members{
    public $Name;
    public $Age;
    public $Phno;
    public $Address;
    public $Salary;
    
    // public function printdata(){
    //     print "Name: $this->Name <br> ";
    //     print "Age: $this->Age <br> ";
    //     print "Phno: $this->Phno <br> ";
    //     print "Address: $this->Address <br> ";
        
    // }

    public function printSalary(){
        print "Salary: $this->Salary <br> ";
    }
}

$obj = new Members;
// $obj->Name = 'Santosh';
// $obj->Age = 19;
// $obj->Phno = 9178975791;
// $obj->Address = 'Kendujhar';
$obj->Salary = 50000;

// print $obj->printdata();
print $obj->printSalary();

 class employee extends Members{
    public $Specialization;
 }
//  $obj1 = new employee;
//  $obj1->Name = 'Santosh';
//  $obj1->Age = 19;
//  $obj1->Phno = 9178975791;
//  $obj1->Address = 'Kendujhar';
//  $obj1->Salary = 50000;

class manager extends Members{
    public $Department;
}

$obj1 = new employee;

print $obj1->Name = "Santosh";
print "<br>";
print $obj1->Age = 19;
print "<br>";
print $obj1->Phno = 9178975791;
print "<br>";
print $obj1->Address = "BBSR";
print "<br>";
print $obj1->Salary = 3000;
print "<br>";
?>