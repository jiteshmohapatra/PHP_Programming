<html>
    <head>
        <title> webpage-1</title>
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
body{
    margin:55px;
}
            </style>
            </head>
            <body style=background-color:pink;>
                <?php
                $lets = mysqli_connect("localhost","root","","company");
                // if($lets===false){
                //     die("Error:could not connect");
                // }else{
                //     echo "connection reached successfully".mysqli_get_host_info($lets);
                // }

$result = "select * from ibm";
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