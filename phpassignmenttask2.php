<?php
echo "<html>";
echo "<head>";
echo "<style>";
echo "body {text-align:center; font-style:italic; padding:35px; background-color:springgreen; display:inline-block; font-family:sans-serief; font-size:35px; margin:25px;  box-shadow:5px 5px 5px green; border-left:4px solid white; border-top:4px solid orange; color:blue; border-right:4px solid white;width:1000px;}";
echo "b{color:green; box-shadow:5px 5px 5px blue; display:flex;}";
echo "i{color:red; background-color:yellow; border:5px solid grey; font-family:verdana;}";

echo "</style>";
echo "</head>";
echo "<body>";

$k = 20;
$f = 50;
$s = $k + $f;
$v = $k - $f;
$g = $k * $f;
$l = $k / $f;
$c = $k % $f;
echo "<i>Q.2)The summation of two number 20 & 50 is<b style=color:blue;> " .$s ."</b><br>";
echo "The substraction of two number 20 & 50 is<b style=color:blue;> " .$v ."</b><br>";
echo "The multiplication of two number 20 & 50 is<b style=color:blue;> " .$g ."</b><br>";
echo "The division of two number 20 & 50 is<b style=color:blue;> " .$l ."</b><br>";
echo "The modulus of two number 20 & 50 is<b style=color:blue;> " .$c."</b><br></i>";
echo "<hr>";







echo "</body>";
echo "</html>";
?>