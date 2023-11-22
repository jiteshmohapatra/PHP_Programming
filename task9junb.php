<?php
$link = mysqli_connect("localhost","root","");
class extra{

public $res;

public function fn4(){
   $fine = $this->res * 0.38;
   echo "<h1 style=color:brown;font-size:50px;padding:45px;margin-left:300px;>The weight of mars planet is " . "<ins><b style=color:orange;>" .$fine ."</ins></b></h2><hr style=width:405px;color:gray;background-color:gray>";
 
}




}

$r1 = new extra;
$r1->res =  mysqli_real_escape_string($link,$_REQUEST["h4"]);
$r1->fn4();









?>