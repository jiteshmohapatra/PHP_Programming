<?php
echo "<html>";
echo "<head>";
echo "<style>";
echo "body {text-align:center; font-style:italic; padding:45px; background-color:lightpink; display:inline-block; font-family:sans-serief; font-size:30px; margin:45px;  box-shadow:5px 5px 5px green; border-left:4px solid white; border-top:4px solid orange; color:blue; border-right:4px solid white;width:800px; border-bottom:4px solid white;}";
echo "b{color:green; box-shadow:5px 5px 5px blue; display:flex;}";
echo "i{color:red; background-color:yellow; border:5px solid grey; font-family:verdana;}";
echo "</style>";
echo "</head>";
echo "Q.1)Enter the no of days to convert into YEARS ,DAYS & WEEKS";
echo"<br>";
echo "ANS- ";
$x =500;
$years = $x/365;
$month =$x/30;
$weeks =$years/7;
$days =$weeks%7;
echo "The converted value in years is<b>" .$years ."</b><br>";
echo "The converted value in days  is<i>" .$month ."</i><br>";
echo "The converted value in weeks  is<b>" .$weeks ."</b><br>";
echo "The converted value in days  is<b>" .$days ."</b><br>";


echo "</body>";
echo "</>";
?>