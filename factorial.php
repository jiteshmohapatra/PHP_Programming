<?php 

$link = mysqli_connect("localhost","root","");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. ".mysqli_connect_error());
    }

class factorial {

    public $f = 1;
    public $a;
    public $i;
    
    public function fn1(){

        for($i=1;$i <= $this->a; $i++){
           $this->f *= $i;

        }
        print "The factorial of $this->a is : $this->f";
    }
}

$obj = new factorial;

$obj->a = mysqli_real_escape_string($link,$_REQUEST['number']);


print $obj->fn1();

?>