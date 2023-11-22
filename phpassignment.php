



<?php
echo "<html>";
echo "<head>";
echo "<style>";
echo "body {  text-align:center; font-style:italic; padding:35px; background-color:wheat; display:inline-block; font-family:sans-serief; font-size:35px; margin:25px; text-shadow:5px 5px 5px deeppink; box-shadow:5px 5px 5px green; border-left:4px solid white; border-top:4px solid orange; color:blue; border-right:4px solid white;}";
echo "</style>";
echo "</head>";
echo "<body>";
$x = 20;
$y = 10;
$z = $x+$y;
$l = $x-$y;
$m = $x*$y;
$n = $x/$y;
$o = $x%$y;
echo "Q.1)The number 10 and 20 <b>sum</b> is -".$z."<br>";
echo "2)The number 10 and 20 <b>substarction</b> is -".$l."<br>";
echo "3)The number 10 and 20 <b>multiplication</b> is -".$m."<br>";
echo "4)The number 10 and 20 <b>division</b> is -".$n."<br>";
echo "5)The number 10 and 20 <b>modulus</b> is -".$o."<br>";

echo "</body>";
echo "</html>";
?>