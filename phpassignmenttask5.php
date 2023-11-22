<?php
echo "<html>";
echo "<head>";
echo "<style>";
echo "body {text-align:center; font-style:italic; padding:35px; background-image:url(phpi.png);display:inline-block; font-family:sans-serief; font-size:35px; margin:25px;  box-shadow:5px 5px 5px green; border-left:4px solid white; border-top:4px solid orange; color:blue; border-right:4px solid white;width:1000px;background-repeat:no-repeat;background-attachment:fixed;background-size:cover; border-bottom:4px solid orange;}";
echo "b{color:orange; box-shadow:5px 5px 5px deeppink; display:flex;}";
echo "i{color:red; background-color:blue; border:5px solid grey; font-family:verdana;}";

echo "</style>";
echo "</head>";
echo "<body>";

$radius = 65;
$dia = 2*$radius;
$circum = 2*3.14*$radius;
$ar = 3.14 * $radius*$radius;
echo "<b>Q.5)The diameter of circle is<i style=color:orange;> ".$dia."</i><br>";
echo "The circumference of circle is<i style=color:orange;> " .$circum ."</i><br>";
echo "The area of  circle is<i style=color:orange;> " .$ar ."</i><br></b>";


echo "</body>";
echo "</html>";
?>