<html>
      
        <head>
        <body>
<style>

tr,th,td:nth-child(even) {
  background-color: #D6EEEE;
}
table, th, td {
  border: 2px solid deeppink;
  font-size:30px;
  text-align:center;
  margin:10px;
  padding:20px;
  background-color: springgreen;
  
}
th{
    color:deeppink;
}
    </style>
    </head>

<?php
$lets = mysqli_connect("localhost","root","","film");
if($lets===false){
    die("Error:could not connect");
}else{
    echo "connection reached successfully".mysqli_get_host_info($lets);
}
$result = "create database film";
// if(mysqli_query($lets,$result)){
//     echo "data base created successfully";
// }else{
//     echo "Error could not execute successfully" .mysqli_error($lets);
// }
 echo "<br>";
 //$result =  "CREATE TABLE movie(mov_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,MOV_NAME VARCHAR(30) NOT NULL, REALESE_YEAR date NOT NULL, PROFIT int NOT NULL,LOSS int NOT NULL)";
 if(mysqli_query($lets,$result))
 {      echo "<br>"."Table created successfully.";

 }
else
{
    echo "ERROR: Could not execute the SQL query".mysqli_error($lets);
 }
echo "<br>";
// $result = "INSERT INTO movie (mov_id,MOV_NAME,REALESE_YEAR,PROFIT,LOSS) values('501','Maine Pyar Kiya','1989-12-29','10','5'),('502','Baaghi','1990-12-21','50','8'),('503','Sanam Bewafa','1992-12-21','12','3'),('504','saajan','1991-12-20','20','1'),('505','Hum Aapke Hain Koun','1994-08-06','12','2'),('506','Chaand Ka Tukdaa','1994-08-20','15','5')";
// if(mysqli_query($lets,$result))
//    {
//         echo "<br>" ."data inserted successfully.";
//     }
//     else
//     {
//         echo "ERROR: Could not execute the SQL query".mysqli_error($lets);
//     }
echo "<br>";
$result = "select * from movie";
if($result1 = mysqli_query($lets,$result)){
if(mysqli_num_rows($result1)>0){
echo "<table >";
echo "<tr>";
echo " <th> MOV - ID </th> ";
echo " <th> MOV - NAME </th> ";
echo " <th> REALESE - YEAR</th> ";
echo " <th>PROFIT </th> ";
echo " <th>LOSS </th> ";
echo "</tr> ";
while ($row = mysqli_fetch_array($result1)){
    echo "<tr>";
            
    echo "<td>" .$row['mov_id']."</td>";
    echo "<td>" .$row['MOV_NAME']."</td>";
    echo "<td>" .$row['REALESE_YEAR']."</td>";
    echo "<td>" .$row['PROFIT']."</td>";
    echo "<td>" .$row['LOSS']."</td>";
    echo "</tr>";

}
echo "</table>";
mysqli_free_result($result1);

} else{
    echo "no records matching your query";
}
}





?>
</body>
</html>
