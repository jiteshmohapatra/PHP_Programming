<?php
echo "<html>";
echo "<head>";
echo "<style>";
echo "body {text-align:center; font-style:italic; padding:35px; background-color:wheat; display:inline-block; font-family:sans-serief; font-size:35px; margin:25px;  box-shadow:5px 5px 5px green; border-left:4px solid white; border-top:4px solid orange; color:blue; border-right:4px solid white;width:1000px;}";
echo "b{color:green; box-shadow:5px 5px 5px blue; display:flex;}";


echo "</style>";
echo "</head>";
echo "<body>";

$cen = 50;
$conv = $cen*0.01;
$kilo =$cen/100000;
echo "the converted value in meter is<b style=color:yellow;> " .$conv ."</b><br>";
echo "the converted value in kilometer is <b style=color:yellow;>" .$kilo ."</b><br>";






echo "</body>";
echo "</html>";
?>