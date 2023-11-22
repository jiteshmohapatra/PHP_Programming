<?php
            //how to setting a cookie
            //syntax is - setcookie(name,value,expire,path,domain,secure)

 setcookie("id2","raja",time()+5) ;

//how to access cookies values we are using super global variables i.e $_cookie
 echo   $_COOKIE['id2'] ;

if(isset($_COOKIE['id2'])){

    echo "the value of cookie id is : " .$_COOKIE['id2'];
}else{
    echo "the value of cookie id is not set : ";
}

//remove cookie
setcookie("id1","",time()-1500);
if(isset($_COOKIE['id1'])){

    echo "the value of cookie id is : " .$_COOKIE['id1'];
}else{
    echo "the value of cookie id is not set : "."</h2>";
}
echo "<br>";
//creating session data
$_SESSION["firstname"] = "jitesh";
$_SESSION["last name"] = "jitesh";
//how to access session data

echo $_SESSION['firstname'];



// how can i remove the session data

if(isset($_SESSION['lastname'])){
    unset($_SESSION['lastname']); // in the execuation there is an error because we have unset the session 
}
echo "<br>". $_SESSION['lastname'];


//how can i do that destroy the session
session_destroy(


    
);
?>