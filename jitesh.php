<?php
$link = mysqli_connect("localhost","root","","movie");
//check connection
if($link===false){
    die("Error:could not connect" . mysqli_connect_error());
}
//escape user inputs for security
$getname = mysqli_real_escape_string($link,$_REQUEST['name']);
$getage = mysqli_real_escape_string($link,$_REQUEST['age']);
$getemail = mysqli_real_escape_string($link,$_REQUEST['email']);

//attempt insert query
//$sql = "INSERT INTO person(name,age,email) values('$getname',$getage,'$getemail')";
// if(mysqli_query($link,$sql)){
//     echo "data inserted successfully";
// }else{
//     echo "Error:could not inserted data" . mysqli_error($link);
// }
// mysqli_close($link);
//update table data 
// $sql1 = "UPDATE person set name='raja' where age=18";
// if(mysqli_query($link,$sql1)){
//          echo "data updated successfully";
//      }else{
//          echo "Error:could not inserted data" . mysqli_error($link);
//      }
//      mysqli_close($link);
echo "<br>";

//read the databases
 $sql2 = "select * from person";
 if($result2 = mysqli_query($link,$sql2)){
    if(mysqli_num_rows($result2)>0){
    echo "<table >";
    echo "<tr>";
    echo " <th> name </th> ";
    echo " <th> age </th> ";
    echo " <th> email</th> ";
    echo "</tr> ";
    while ($row = mysqli_fetch_array($result2)){
        echo "<tr>";
                
        echo "<td>" .$row['name']."</td>";
        echo "<td>" .$row['age']."</td>";
        echo "<td>" .$row['email']."</td>";
        echo "</tr>";
    
    }
    echo "</table>";
    mysqli_free_result($result2);
    
    } else{
        echo "no records matching your query";
    }
    }
    
    
    
    

?>