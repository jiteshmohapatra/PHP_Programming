<?php 
class class1 {
    // Constructor

    public function __construct(){
        print "Inside the constructor body.<br>";
    }

    // destructor

    public function __destruct()
    {
        print "Inside the destructor body.<br>";
    }
}

//create a new object

$obj = new class1;
print "You have reached the End of the Program.<br>";

?>