<?php
echo "<html>";
echo "<head>";
echo "<style>";
echo "body {text-align:center; font-style:italic; padding:35px; background-color:wheat; display:inline-block; font-family:sans-serief; font-size:35px; margin:25px;  box-shadow:5px 5px 5px green; border-left:4px solid white; border-top:4px solid orange; color:blue; border-right:4px solid white;width:1000px;}";
echo "b{color:green; box-shadow:5px 5px 5px blue; display:flex;}";
echo "i{color:red; background-color:yellow; border:5px solid grey; font-family:verdana;}";

echo "</style>";
echo "</head>";
echo "<body>";
$x = 10;
$y = 20;
$z = 30;
$d = $x + $y +$z;
echo " Q.1)The summation of three number 10,20,& 30 is<b style=color:red;><marquee> ".$d. "</marquee></b><br>";
echo "<hr>";
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
$length = 180;
$breath = 90;
$formula = 2*($length + $breath);
echo "Q.3) The perimeter of rectangle is<b style=color:red;> " .$formula ."</b><br>";
 $new = 160;
 $old = 50;
 $area = $new * $old;
 echo "Q.4)The area of rectangle is<b style=color:red;> " .$area ."</b><br>";

$radius = 65;
$dia = 2*$radius;
$circum = 2*3.14*$radius;
$ar = 3.14 * $radius*$radius;
echo "<b>Q.5)The diameter of circle is<b style=color:orange;> <marquee>".$dia."</marquee></b><br>";
echo "The circumference of circle is<b style=color:orange;><marquee> " .$circum ."</marquee></b><br>";
echo "The area of  circle is<b style=color:orange;> <marquee>" .$ar ."</marquee></b><br></b>";



echo "</body>";
echo "</html>";

?>