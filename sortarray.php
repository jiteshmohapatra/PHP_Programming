<?php
//sort an indexed array
//ascending order

$cars = array("lexus","massrati","audi","buggati","rangerover","fortuner");
sort($cars);
print_r($cars);
echo "<br>"."<h2 style=color:orange;>";
$re = $cars;
print_r($re) ;
echo "</h2>";
//descending order

echo "<br>";
$bike = array("hero","honda","bmw","suzuki","yamaha","bajaj","royalenfield","buggati");
rsort($bike);
echo "<h2 style=color:deeppink>";
print_r($bike);
echo "</h2>";

echo "<br>";
//SORT AN ASSOCIATIVE ARRAY

$color = array("red"=>90,"green"=>40,"blue"=>47,"black"=>4,"sky"=>12,"grey"=>1,"pink"=>50,"violet"=>2);
asort($color);
echo "<h2 style=color:springgreen>";
print_r($color);
echo "</h2>";
?>
<?php

$color = array("red"=>90,"green"=>40,"blue"=>47,"black"=>4,"sky"=>12,"grey"=>1,"pink"=>50,"violet"=>2);
arsort($color);
echo "<h2 style=color:grey>";
print_r($color);
echo "</h2>";
?>
<br>
<?php

$accessories = array("mouse"=>90,"keyboard"=>40,"cpu"=>47,"monitor"=>4,"ups"=>12,"pendrive"=>1,"harddisk"=>50,"processor"=>2);
krsort($accessories);
echo "<h2 style=color:violet>";
print_r($accessories);
echo "</h2>";
?>