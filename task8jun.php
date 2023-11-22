<?php
class user{

public $name1;
public $name2;
public function fn3(){
    echo "<ins><h1 style=color:orange;font-size:50px;margin-left:100px;padding:35px;> Hello " . $this->name1 ." ". $this->name2 ."</ins></h1>";

}

}
 $a1 = new user;
 $a1->name1 = "jitesh";
 $a1->name2 = "Mohapatra";
 $a1->fn3();




?>