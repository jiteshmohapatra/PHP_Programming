<?php

class rectangle
{
public $length = 0;
public $width = 0;
public function getperimeter()
{
$result = 2 * ($this->length + $this->width);
echo "the perimeter of rectangle is " .$result;

}

}


?>