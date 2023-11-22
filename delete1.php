<?php



$link = mysqli_connect("localhost","root","","gitudb");


$id = $_GET['id'];




 $sql = "delete from formtable where slno = '{$id}'";
 $res = mysqli_query($link,$sql);
 if($res){
    header("location:read1.php");

}else{
     echo "data not inserted";
 }






?>