<?php
$ibm = "great learning";
function fn1(){
    global $ibm;
    echo "this ibm is inside ".$ibm ."<br>";
}fn1();
echo "the ibm is out side the function ".$ibm;
$x = "hello IBM";
fn1();
echo $x;

?>
<br>

<html>
    <head>
        <title> document form </title>
</head>
    <body style=text-align:center;>
    <h2 style=color:blue;> Self Registration </h2>
<form action="p2.php" method="get">
    <label>Enter Your Name</label>
    <input type="text" name="c1" id="id1">
    <br><br>
    <label>Enter your Password</label>
    <input type="password" name="c2" id="id2">
<br><br>
<input type="submit" value="submit">
<input type="reset" value="reset">

</form>




</body>
</html>
