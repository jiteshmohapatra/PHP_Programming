<?php
class triangle{

public $a=0;
public $b=0;
public $c=0;
public function fn3(){

$semi = ($this->a + $this->b +$this->c)/2;
$area = sqrt($semi*($semi-$this->a)*($semi-$this->b)*($semi-$this->c));
echo "<h1 style=color:orange;>The Area of triangle is - "."<ins><strong style=color:blue;>" .$area ."</strong
></ins> </h1>";

}
public function __construct($x,$y,$z){
    $this->a =$x;
    $this->b =$y;
    $this->c =$z;

}
}

$a1 = new triangle(45,50,35);
$a1->fn3();






?>