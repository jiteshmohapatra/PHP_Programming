<?php
$array =array(1,2,3,5,8,13,21,34,55);
$result =0;
for($i=0;$i<5;$i++){
    $result+=$array[$array[$i]];
    
}
echo $result;











?>