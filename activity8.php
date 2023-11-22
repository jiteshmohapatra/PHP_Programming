<?php
echo "<h2 style=color:blue;>Q.1)write a php function test whether a number is greater than 30, 20 or 10 using ternary operator</h2>";
echo "Ans-"."<br>";
$x = 40;
echo ($x > 30) ? 'inside it'."<br>" : 'not inside it'."<br>";
echo ($x > 20) ? 'inside it' ."<br>": 'not inside it'."<br>";
echo ($x > 10) ? 'inside it'."<br>" : 'not inside it'."<br>";

echo "<h2 style=color:blue;>Q.2) Write a PHP script to calculate and display average temperature, five lowest and highest 
temperatures in given data.</h2>";
echo "Ans- ";
$a = array(41,38,25,35,38,35,37,34,45,51,50,31,32,33,39);
sort($a);
for($i=0;$i<5;$i++){
    echo  $a[$i]." ";
}
echo "<br>";
rsort($a);
for($j=0;$j<5;$j++){
    echo $a[$j]." ";
}


echo "<br>";
echo "<h2 style=color:blue;>Q.3) Write a function to check a number is prime or not</h2>";
echo "Ans-";



echo "<br>";
echo "<h2 style=color:blue;>Q.4)Wap in php to find the maximum of three numbers</h2>";
echo "Ans-";

$a = 100;
$b = 50;
$c = 60;
if($a>$b && $a>$c){
    echo "the  first number is greatest";
}elseif($b>$a && $b>$c){
    echo "the second number is greatest";
}else{
    echo "the third number is greatest";
}
echo "<br>";
echo "<h2 style=color:blue;>Q.5)check wheather an input number is divisible by seven</h2>";
echo "Ans-";
$r = 70;
if($r% 7==0){
echo "the number is divisible by 7";
}else{
    echo "the number is not divisible by seven";
}
echo "<br>";
echo "<h2 style=color:blue;>write a program to display the colors red ,blue,green,yellow ,pink,and orange using switch case</h2>";
echo "Ans-";

$colors = "orange";
switch($colors){
    case "red":echo "The following color is red";
    break;
    case "blue":echo "The following color is blue";
    break;
    case "green":echo "The following color is green";
    break;
    case "yellow":echo "The following color is yellow";
    break;
    case "pink":echo "The following color is pink";
    break;
    case "orange":echo "The following color is orange";
    break;
    default:echo "the are almost six colors";

}

echo "<br>";
echo "<h2 style=color:blue;> Wap in php to print the no of days in month using Switch case</h2>";
echo "Ans-";
$days = "january";
switch($days){
    case "january":echo "the number of days in january is 31";
    break;
    case "february":echo "the number of days in february is 28";
    break;
    case "march":echo "the number of days in march is 31";
    break;
    case "april":echo "the number of days in april is 30";
    break;
    case "may":echo "the number of days in may is 31";
    break;
    case "jun":echo "the number of days in jun is 31";
    break;
    case "july":echo "the number of days in july is 30";
    break;
    case "august":echo "the number of days in august is 31";
    break;
    case "september":echo "the number of days in september is 30";
    break;
    case "october":echo "the number of days in october is 31";
    break;
    case "november":echo "the number of days in november is 30";
    break;
    case "december":echo "the number of days in december is 31";
    break;
    default:echo "there is 12 month in one year";
}
?>