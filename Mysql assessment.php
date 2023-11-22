<?php
$link = mysqli_connect("localhost","root","","movie");
if($link===false){
    die("error:could not connect");
}
echo "Connection established successfully. Host info: ". mysqli_get_host_info($link);
 
$sql1= "create database movie";
  //if(mysqli_query($link,$sql1)){ //wheather query is success fully execute or not
     echo "data base create successully";

  //}else{
     echo "error:could not execute the sql query" .mysqli_error($link);
  //}
echo "<br>";
$sql1= "CREATE TABLE cinema(movid INT NOT NULL PRIMARY KEY AUTO_INCREMENT,MOV_NAME VARCHAR(30) NOT NULL, REALESE_YEAR date NOT NULL, PROFIT int NOT NULL,LOSS int NOT NULL)";
if(mysqli_query($link,$sql1))
  {      echo "<br>"."Table created successfully.";

  }
 else
 {
     echo "ERROR: Could not execute the SQL query".mysqli_error($link);
  }
  echo "<br>";
  $sql1="INSERT INTO cinema (movid,MOV_NAME,REALESE_YEAR,PROFIT,LOSS) values('101','Maine Pyar Kiya','29-12-1989','14','5'),('102','Baaghi','21-12-1990','4','1'),('103','Sanam Bewafa','01-09-1991','6','1'),('104','Saajan','20-12-1991','15','2'),('105','Hum Aapke Hain Koun','06-08-1994','72','11'),('106','Chaand Ka Tukdaa','20-08-1994','2','10')";
   
   if(mysqli_query($link,$sql1))
   {
        echo "<br>" ."data inserted successfully.";
    }
    else
    {
        echo "ERROR: Could not execute the SQL query".mysqli_error($link);
    }

?>