<?php
class checks{
public $num;
public function myfn2(){
    if($this->num % 2 ==0){
        echo "The number is even ";
    }else{
        echo "The number is odd ";
    }
}


}

$g1 = new checks;
$g1->num = 12;
$g1->myfn2();

?>
<br><br>
<?php
class divisible{
    public $check1;
    public function myfn3(){
        if($this->check1 % 7 ==0){
            echo "The number is divisible by seven";
        }else{
            echo "The number is not divisible by seven";
        }
    }
}

$t1 = new divisible;
$t1->check1 = 50;
$t1->myfn3();

?>
<br><br>
<?php
class area{
    public $side1;
    public $side2;
    public $side3;
    public function myfn4(){
        $result = ($this->side1 + $this->side2 + $this->side3) / 2 ;
        $sides = sqrt($result * ($result - $this->side1) * ($result - $this->side2) * ($result - $this->side3));
        echo "The area of triangle having three different sides is " .$sides;
    }
}

$x1 = new area;
$x1->side1 = 5;
$x1->side2 = 6;
$x1->side3 = 7;
$x1->myfn4();



?>
