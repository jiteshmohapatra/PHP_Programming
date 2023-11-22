<?php
$x;
for($x=5;$x<=10;$x++){
    echo "the number is ".$x ."<br>";
}

?>
<br>
<?php  //for each loop
$color =array("blue","red","orange","sky","green","black","white");
foreach($color as $p){
    echo $p;
    echo "<br>";
}

?>
<br>
<?php //for each loop in associative array
$cars = array("buggati"=>30,"massrati"=>40,"audi"=>41,"bmw"=>12);
foreach($cars as $p=>$x){
    echo $p ."=>" .$x;
    echo "<br>";
}



?>

<br>


<?php
function fn1(){
    echo "welcome to the 1st php function"."<br>";

}
fn1();

?>
<br>
<?php // addition in function
function fn6($a,$b){
    echo "welcome to the function six"."<br>";
    $c =$a+$b;
    print $c;
}
fn6(25,36);

?>
<br>
<?php // how to set default value
function fn5($a,$b=10){
    echo "welcome to the function six"."<br>";
    $c =$a+$b;
    print $c;
}
fn5(25);

?>


<br>
<?php // how to set default value
function fn9($a,$b=10){
    echo "welcome to the function six"."<br>";
    $c =$a+$b;
    return $c;
}
 $s = fn9(25,23);//calling the function
 echo "the out side the function is" .$s ."<br>";

?>