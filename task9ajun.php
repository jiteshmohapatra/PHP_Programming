
<?php

$link = mysqli_connect("localhost","root","");
 class show{
    
public $check1;
public $check2;




public function fn1(){
$n =0;
for($i=$this->check1;$i<=$this->check2;$i++){
    
  //echo $i;
  if($i%2==0){
    //print $i;
    $n += $i;
    
  }

}

echo "<h1 style=font-size:50px;color:orange;padding:35px;margin-left:300px;>The Sum of the all even number in the follwing  range is  " ."<ins><b style=color:blue;>".$n ."</ins></b> </h1>";

}
 

 }
$q1 = new show;
$q1->check1 = mysqli_real_escape_string($link,$_REQUEST["h1"]);
$q1->check2 = mysqli_real_escape_string($link,$_REQUEST["h2"]);
$q1->fn1();




?>