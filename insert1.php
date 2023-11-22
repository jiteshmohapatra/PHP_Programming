<html>
    <head>
        <title> webpage-3 </title>
        <style>


</style>
</head>
<body>
    <?php

$lets = mysqli_connect("localhost","root","","company");
  if($lets===false){
      die("Error:could not connect");
  }else{
     echo "connection reached successfully".mysqli_get_host_info($lets); 
     }
 //$result = "create database company";
//    if(mysqli_query($lets,$result)){
//        echo "data base created successfully";
//     }else{
//         echo "Error could not execute successfully" .mysqli_error($lets);
//     }
 echo "<br>";
   //$result =  "CREATE TABLE ibm(mov_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,MOV_NAME VARCHAR(30) NOT NULL, REALESE_YEAR date NOT NULL, PROFIT int NOT NULL,LOSS int NOT NULL)";
$result = 
   if(mysqli_query($lets,$result))
   {      echo "<br>"."Table created successfully.";

    }else

   {
       echo "ERROR: Could not execute the SQL query".mysqli_error($lets);
    }
echo "<br>";
 




?>

</body>
</html>