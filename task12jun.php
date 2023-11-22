<?php
class check{
public $num=0;
public $num1=0;
public function fn1(){
    if($this->num%2==0){
        echo "The ist number is even";
    }elseif($this->num1%2==0){
        echo "the second number is even";
    }
    else{
        echo "finally the 1st and second number is odd";
    }
}

public function __construct($x,$y){

    $this->num = $x;
    $this->num1 = $y;
}

}
$z1 = new check(5,9);
$z1->fn1();






?>