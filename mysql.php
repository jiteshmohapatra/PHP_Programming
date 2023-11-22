<?php
        //connecting to mysql

$link = mysqli_connect("localhost","root","","home"); //link variable is representing the data base connectivity with mysql
//check connectivity

if($link===false){
    die("error:could not connect");//is an alius of the exit finction  
}
echo "Connection established successfully. Host info: ". mysqli_get_host_info($link); //inbuilt function 
 
 //attempt creation of databases

//  $sqlquery= "create database home";
//  if(mysqli_query($link,$sqlquery)){ //wheather query is success fully execute or not
//     echo "data base create successully";

//  }else{
//     echo "error:could not execute the sql query" .mysqli_error($link);
//  }
echo "<br>";
 //$sqlquery = "CREATE TABLE employee(empid INT NOT NULL PRIMARY KEY AUTO_INCREMENT,first_name VARCHAR(30) NOT NULL, last_name VARCHAR(30) NOT NULL, designation VARCHAR(30) NOT NULL)";

    
//  if(mysqli_query($link,$sqlquery))
//  {
//      echo "<br>"."Table created successfully.";
//  }
//  else
//  {
//      echo "ERROR: Could not execute the SQL query".mysqli_error($link);
//  }
echo "<br>";

//  $sqlquery="INSERT INTO employee (first_name,last_name,designation) values('john','kumar','designer'),('jame','kumar','hr'),('alice','kumark','doctor'),('jara','sen','manager')";
   
//  if(mysqli_query($link,$sqlquery))
//  {
//      echo "<br>" ."data inserted successfully.";
//  }
//  else
//  {
//      echo "ERROR: Could not execute the SQL query".mysqli_error($link);
//  }
//attempt select query exuction
$sqlquery = "select * from employee";
if($result = mysqli_query($link,$sqlquery)){ //store in result variable all data 
    if(mysqli_num_rows($result)>0){
        echo "<table>";
        echo "<tr> ";
        echo " <th> EMP ID </th> ";
        echo " <th>FIRST NAME </th> ";
        echo " <th>LAST NAME </th> ";
        echo " <th>DESIGNATION </th> ";
        echo "</tr> ";
        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            
            echo "<td>" .$row['empid']."</td>";
            echo "<td>" .$row['first_name']."</td>";
            echo "<td>" .$row['last_name']."</td>";
            echo "<td>" .$row['designation']."</td>";
            echo "</tr>";

        }
        echo "</table>";
        //free the result set  i.e optional but that is recomended to do it
        mysqli_free_result($result);
    }
    else
    {
        echo "no records matching your query";
    }
    
}

//close connection
mysqli_close($link);



?>