<?php   // to check wheather a number is disible by 2 and 3 or both 
$x =288;
if($x%2==0 && $x%3==0){
    echo "divisible by both";
}elseif($x%2==0){
    echo "the number is divisible by 2";
}else if($x%3==0){
    echo "the number is divisible by 3";
}else{
    echo "the number is not divisible by both";
}

?>
<br>
<?php
$fruits = "mango";
switch($fruits){
case "apple": echo "the fruits is apple";
break;
case "orange": echo "the fruits is orange";
break;
case "mango": echo "the fruits is mango";
break;
case "guva": echo "the fruits is guva";
break;
default:echo "the fruit is does not match";
break;
}
?>
<br>
<?php
$x=10;
while($x<=200){
    echo "the number is : $x <br>";
    $x+=20;
}

?>
<br>
<?php
$y =20;
do{
    echo "the number is : $y <br>";
    $y--;
}while($y>=10)

?>
<br>
<?php
for($x=10;$x<=100;$x+=10){
    echo "the value is : $x <br>";
}

?>