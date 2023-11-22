<?php
echo "<html>";
echo "<head>";
echo "<style>";
echo "body {text-align:center; font-style:italic; padding:35px; background-color:lightpink; display:inline-block; font-family:sans-serief; font-size:35px; margin:25px;  box-shadow:5px 5px 5px green; border-left:4px solid white; border-top:4px solid orange; color:blue; border-right:4px solid white;width:1000px;}";
echo "b{color:green; box-shadow:5px 5px 5px blue; display:flex;}";
echo "i{color:red; background-color:yellow; border:5px solid grey; font-family:verdana;}";

echo "</style>";
echo "</head>";
echo "<body>";
$temp =50;
$far =$temp*9/5+32;
$cel =$far -32*5/9;
echo "the converted value in celcius to farenheit is <i>" .$far ."</i><br>";
echo "the converted value in farenheit to celcius is <i>" .$cel ."</i><br>";





echo "</body>";
echo "</html>";

?>