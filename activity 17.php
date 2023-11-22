<html>
    <body>
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
</html>
</body>