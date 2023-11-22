<?php
require "rectangle.php";
//creating object of the class
$obj = new rectangle; //we are using new keyword by creating object so obj variable is object of the class rectangle
$obj->length = 60;                   //only the object of the class can access the members of the class
$obj->width = 40;
echo $obj->getperimeter();




?>