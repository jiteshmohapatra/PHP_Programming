<?php
$x = 10;
if($x>0){
    echo "the number is possitive";
}elseif($x<0){
    echo "the number is negetive";
}else{
    echo "the number is zero";
}

?>
<br>
<?php
$a = 10;
$n=0;

for($i=2; $i < $a/2; $i++){
    if($a % $i == 0){
        print "Not prime";
        $n=1;
        break;
    }
    else{
        print "Prime";
        $n=1;
    }
    if($n!=0){
        break;
    }
}



?>
<br>
<?php
$x = "committe";
$res = $x[4];
if($res=='a'||$res=='e'||$res=='i'||$res=='o'||$res=='u'){
    echo "the 5th letter is vowel";
}else{
echo "the 5th letter is not vowel";
}


?>