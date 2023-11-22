<?php
class wave{
public $intemp=0;
public function fn2(){

$r=$this->intemp*9/5+32;
echo "<h2 style=color:blue;>The converted value centigrade to farenheit is " .$r ."</h2>";
$cel=$r-32*5/9;
echo "<h2 style=color:brown;>The converted value in celcius to farenheit is ".$cel ."</h2>";



}
public function __construct($a){
    $this->intemp = $a;
}



}
$z1 = new wave(50);
$z1->fn2();









?>