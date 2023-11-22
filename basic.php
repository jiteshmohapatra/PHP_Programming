<?php
echo "<html>";
echo "<head>";
echo "<style>";
echo "body {  text-align:center; font-style:italic; padding:35px; background-color:pink; display:inline-block; font-family:timesnewroman; font-size:25px; margin:25px; text-shadow:5px 5px 5px deeppink; box-shadow:5px 5px 5px green; border-left:4px solid green; border-top:4px solid green;}";
echo "</style>";
echo "</head>";

$x = "welcomeNsti";//string of text
var_dump($x);
echo "<br>";
$b = 0x2b;//hexadecimal number
var_dump($b);

echo "<br>";
$a =0123;//octal number
var_dump($a);
echo "<br>";
$d =0b1011001;//binary number
var_dump($d);
echo "<br>";
$f = 15.367;//floating point number
var_dump($f);
echo "<br>";
$g = true;//boolean value
var_dump($g);
echo "<br>";
$h = false;//boolean value
var_dump($h);
echo "<br>";
$j =array("cycle","bike","car","train","bus","truck","aeroplane");//array value
var_dump($j);
echo "<br>";


$m = null;//null value
var_dump($m);

echo "</body>";
echo "</html>";
?>