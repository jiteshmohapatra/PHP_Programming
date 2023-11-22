<?php
class find{
public $num;
public $num1;

public function check(){
if($this->num >= $this->num1){
    echo "The number one is maximum";
}else{
    echo "The number two is  maximum";
}


}
    
}

$f1 = new find;
$f1->num = 12;
$f1->num1 = 15;
$f1->check();

?>
<br><br>
<?php
class circle{
public $radius;
public function cyclic(){

    $result = 2 * $this->radius;
    $result1 = 2 * 3.14 * $this->radius;
    $result2 = 3.14 * $this->radius * $this->radius;
    echo "The diameter of circle is " .$result ."<br>";
    echo "The circumference of circle is " .$result1 ."<br>";
    echo "The area of circle is " .$result2 ."<br>";
}


}

$t1 = new circle;
$t1->radius = 20;
$t1->cyclic();


?>
<br><br>
<?php

class triangle{

    public $one;
    public $two;

    public function click(){

$ok = 180 -($this->one + $this->two);
echo "the third angel of the triangle is " .$ok;



    }
}

$g1 = new triangle;
$g1->one = 50;
$g1->two = 40;
$g1->click();



?>
