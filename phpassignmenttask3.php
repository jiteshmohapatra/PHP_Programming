<?php
echo "<html>";
echo "<head>";
echo "<style>";
echo "body,b {text-align:center; font-style:italic; padding:35px; background-color:grey; display:inline-block; font-family:sans-serief; font-size:35px; margin:25px;  box-shadow:5px 5px 5px green; border-left:4px solid white; border-top:4px solid orange; color:blue; border-right:4px solid white;width:1000px; display:flex;}";

echo "</style>";
echo "</head>";
echo "<body>";



$length = 180;
$breath = 90;
$formula = 2*($length + $breath);
echo "Q.3) The perimeter of rectangle is<b style=color:red;><marquee> " .$formula ."</marquee></b><br>";

echo "</body>";
echo "</html>";
?>