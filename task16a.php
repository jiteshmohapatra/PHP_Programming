<html>
    <head>
        <title> doc1 </title>
        <style>




            </style>
            </head>
            <body style=background-color:pink;margin:35px;color:blue;text-align:center;font-size:20px;>




<?php
class vehicle{


public $speed=500;
public $time=2;
public $fuelef=1;
public $dis=500;
public $distance;
public $speed1;
public $efficiency;

/*public function myasset(){
        
}*/
}
$x5 = new vehicle;
/*$x5->speed=500;
$x5->time=2;
$x5->fuelef=1;
$x5->dis=500;*/
//$x5->myasset();

class truck extends vehicle {
    public $make;
    public $model;
    public $year;
    public $fueltype;

    public function myfn5(){
        $this->distance = $this->speed * $this->time;
        $this->speed1 = ($this->dis / $this->time);
        $this->efficiency = ($this->dis / $this->fuelef);
echo "The distance travelled is " .$this->distance ."<br>";
echo "The speed travelled is " .$this->speed1 ."<br>";
echo "The efficiency travelled is " .$this->efficiency ."<br>";

    }
    
}

$x1 = new truck;
echo "<h2> The Name of Truck is " . $x1->make = "Tata"."<br>";
 $x1->model = "Tataprima2830k"."<br>";
 $x1->year = 1995 ."<br>";
 $x1->fueltype = "disel"."<br>";
//$x1->myasset();
$x1->myfn5();
echo "<br>" ."</h2>";


class car extends vehicle{
    public $make;
    public $model;
    public $year;
    public $fueltype;
    public function myfn6(){
        $this->distance = $this->speed * $this->time;
        $this->speed1 = ($this->dis / $this->time);
        $this->efficiency = ($this->dis / $this->fuelef);
echo "The distance travelled is " .$this->distance ."<br>";
echo "The speed travelled is " .$this->speed1 ."<br>";
echo "The efficiency travelled is " .$this->efficiency ."<br>";

    }
}

 $x2 = new car; 
echo "<h3>The Name of Car is " . $x2->make = "BMW" ."<br>";
 $x2->model = "BMWX1" ."<br>";
 $x2->year = 1916 ."<br>";
 $x2->fueltype = "gasoline" ."<br>";
 $x2->myfn6();
 echo "<br>" ."</h3>";
//$x2->myasset();

class motorcycle extends vehicle{
    public $make;
    public $model;
    public $year;
    public $fueltype;
    public function myfn7(){
        $this->distance = $this->speed * $this->time;
        $this->speed1 = ($this->dis / $this->time);
        $this->efficiency = ($this->dis / $this->fuelef);
echo "The distance travelled is " .$this->distance ."<br>";
echo "The speed travelled is " .$this->speed1 ."<br>";
echo "The efficiency travelled is " .$this->efficiency ."<br>";

    }


}
$x3 = new motorcycle;
echo " <h4>The Name of The Motrcycle is " .$x3->make = "HONDA" ."<br>";
 $x3->model = "HONDA GOLDWING" ."<br>";
 $x3->year = 1973 ."<br>";
 $x3->fueltype = "petrol" ."<br>";
$x3->myfn7();
echo "<br>"."</h4>";
//$x3->myasset();

?>
</html>
</body>


