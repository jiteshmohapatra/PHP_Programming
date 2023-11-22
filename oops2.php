<?php
//define the class

class staticdemo{
//to declare static property
public static $greeting = "Incredible india"; //$greeting is the class member of staticdemo
//to declare static method
public static function display(){
    echo self::$greeting;
}

}
//we will attempt to access the static property and method directly

echo staticdemo::$greeting;
echo "<br>";
staticdemo::display();

?>