<?php
$link = mysqli_connect("localhost","root","","company");

// Check connection
if($link === false){
    die("ERROR: Could not connect. ".mysqli_connect_error())."<br>";
}

// Escape user for security

$getcolumn = mysqli_real_escape_string($link,$_REQUEST['column']);
$getvalue = mysqli_real_escape_string($link,$_REQUEST['delvalue']);

$sql = "DELETE from ibm where $getcolumn = '$getvalue'";

if(mysqli_query($link,$sql)){
    print "Your Data Deleted Successfully.<br>";
    print "Thank You...<br>";
}
else{
    print "ERROR: Could not execute ".mysqli_error($link);
}

mysqli_close($link);
?>