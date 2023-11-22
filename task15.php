<?php
class number{

public $num;
 function mynum(){
   if($this->num>0){
    echo "The number is possitive";
   }elseif($this->num<0){
echo "The number is negetive";
   }else{
    echo "The number is zero";
   }
 }

}
         
 $r1 = new number;
 $r1->num = 100;
 $r1->mynum();


?>
<br><br>
<?php
class measure{
    public $length;
    public $width;
    function mycm(){
$result = $this->length * 0.01;
$result1 = $this->width * 100;
echo "The converted value in mt is ".$result;
echo "<br>";
echo "The converted value in centimeter is ".$result1;

    }
}
 $e1 = new measure;
 $e1->length = 100;
 $e1->width = 1;
 $e1->mycm();
?>

<br><br>
<?php
class convert{

public $days;
public function myfn6(){
$year1 = $this->days/365;
$month = ($this->days % 365)/30;
$weeks = ($this->days%365)/7;
$days1 =($this->days%365)%7;
echo "The converted value in year is ".$year1;
echo "<br>";
echo "The converted value in month is ".$month;
echo "<br>";
echo "The converted value in weeks is ".$weeks;
echo "<br>";
echo "The remaining value in days is ".$days1;

}

}

$e1 = new convert;
$e1->days = 1000;
$e1->myfn6();

?>
<br><br>
<?php
class factorial{
public $num;
public $num1;
public function myfn7(){
for($i=1;$i<=$this->num;$i++){
  $this->num1 *= $i;
}
echo "The factor of number six is ".$this->num1;
}


}

$f1 = new factorial;
$f1->num = 6;
$f1->num1 = 1;
$f1->myfn7();




?>

