<?php
//indexed array 
$car = array("bmw","massrati","audi","lexus","rolls-royce","jagur");
echo "<h2 style=color:blue;>" .$car[3]."</h2>";
echo "<h2 style=color:blue;>" .$car[0]."</h2>";
echo "<h2 style=color:blue;>" .$car[1]."</h2>";
echo "<h2 style=color:blue;>" .$car[2]."</h2>";
echo "<h2 style=color:blue;>" .$car[3]."</h2>";
echo "<h2 style=color:blue;>" .$car[4]."</h2>";
echo "<h2 style=color:blue;>" .$car[5]."</h2>";


//Associative array 
 
$carprice = array("bmw"=>50000,"audi"=>25000,"jaguar"=>85000);//audi is the key and 25000 is the value of key
echo "<h2 style=color:deeppink;>" .$carprice["jaguar"] ."</h2>";
echo "<h2 style=color:green;>" .$carprice["audi"] ."</h2>";
echo "<h2 style=color:grey;>" .$carprice["bmw"] ."</h2>";

//multidimensional arrays


$detail = array(array("name"=>"jitesh","age"=>23,"city"=>"cuttuck"),array("name"=>"peter","age"=>25,"city"=>"texas"),array("name"=>"john","age"=>35,"city"=>"japan"));

echo "<h2 style=color:springgreen;>" .$detail[2] ["city"] ."</h2>";


//index array with in index arrays
$color = array(array("red","green","yellow"),array("blue","sky","grey"),array("orange","purple","black"));
echo "<h2 style=color:grey;>" .$color[1][2] ."</h2>";


//HOW to view Arrays structure and values ,thre are two wayes 1.var_dump 2.print_r

print_r($color);
echo "<br>";
var_dump($color);

?>