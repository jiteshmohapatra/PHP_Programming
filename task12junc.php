<?php
class find{
public $count1;
public $count2;
public $count3;
public $count4;
public $count5;

public function fn4(){

$res = ($this->count1 + $this->count2 +$this->count3 + $this->count4 + $this->count5)/5;
echo "<h1 style=color:blue;>The Average of these integers is - " ."<b style=color:brown;><ins>".$res ."</ins></b></h1>";

}

public function __construct($a,$b,$c,$d,$e){
    $this->count1 = $a;
    $this->count2 = $b;
    $this->count3 = $c;
    $this->count4 = $d;
    $this->count5 = $e;
}

}
$e1 = new find(5,10,15,20,25);
$e1->fn4();




?>