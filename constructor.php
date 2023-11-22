<?php
class minds{

public $length = 0;
public $width = 0;
public function myfn10(){

$r = $this->length * $this->width;
echo "the area is " .$r;
echo "<br>";

}

public function __construct($x,$y){   //this is predefined function 

    $this->length = $x;
    $this->width = $y;
}

}

$d1 = new minds(10,20);
$d2 = new minds(50,60);
$d1->myfn10();
print "<br>";
$d2->myfn10();




?>