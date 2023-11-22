<?php
setcookie("d2","jiteshmohapatra",time()+30*24*60*60);
echo $_COOKIE["d1"];
echo "<br>";
if(isset($_COOKIE["d1"])){
    echo "the value of cookies is set " .$_COOKIE["d1"] ."<br>";
}else{
    echo "the value of cookies are not set";
}






?>