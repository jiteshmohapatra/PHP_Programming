<html>
    <body>
        <h2 style=color:blue;> Write a function to calculate the factorial of a number</h2>
<?php
echo " ANS= ";

function fn1($x){
    $y=1;
    for($i=1;$i<=$x;$i++){
 $y *= $i;
   }
echo $y;
}
fn1(8);





?>
    </html>
</body>