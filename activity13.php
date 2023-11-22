<html>
    <head>
        <h2 style=color:blue;> Write a program to calculate and print the factorial of a number using a for loop. </h2>
<?php
$x =5;
$y = 1;
for($i=1;$i<=$x-1;$i++){
    $y*=($i+1);
    
}
echo "the factorial number is : $y ";




?>
<br>
<?php
$x =10;

for($a=($x-1);$a!=0;$a--){
    $x = $x*$a;

}
echo "the another factorial number is " .$x;

?>
<br>

<?php
$x =1;
for($a=1;$a<=64;$a++){
    $x = $x*2;
    echo $x." ";
}


?>
</html>
</head>