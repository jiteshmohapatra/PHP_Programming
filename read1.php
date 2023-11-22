<?php
$link = mysqli_connect("localhost","root","","gitudb");
$query = "select * from formtable";
$res = mysqli_query($link,$query);
if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <style>
    body{
        background-color:hsla(89, 43%, 51%, 0.3);border:2px solid hsl(89, 43%, 51%); border-width:30px;margin-top:25px;height:560px;border-style:groove;display:flex;font-family: Arial, sans-serif;
    }
   #i1{
    margin-left:110px;margin-top:30px;font-size:20PX;
    
   }
   
</style>
</head>
<body>
<table class="table table-bordered border-primary table-success table-striped w-50" id="i1">
    <thead>
        <tr>
            <th scope="col" class="table-primary">SL_NO</th>
            <th scope="col" class="table-success">NAME</th>
            <th scope="col" class="table-warning">AGE</th>
            <th scope="col" class="table-secondary">CONTACT</th>
            <th scope="col" class="table-danger">E-MAIL</th>
            <th scope="col" class="table-info">ENTRY</th>
            <th scope="col" class="table-info">ADD</th>
            <th scope="col" class="table-light">DELETE</th>
</thead>
<tbody>
    <?php while($row = mysqli_fetch_array($res)){ ?>
    <tr>
        <th scope="row"><?php echo$row['slno']; ?> </th>
        <td><?php echo $row['name']; ?> </td>
        <td><?php echo $row['age']; ?> </td>
        <td><?php echo $row['contact']; ?> </td>
        <td><?php echo $row['password']; ?> </td>
        <td><a href="form1.php ?id=<?php echo $row['slno']; ?>">CREATE</td>
        <td><a href="edit.php ?id=<?php echo $row['slno']; ?>">UPDATE</td>
        <td><a href="delete1.php ?id=<?php echo $row['slno']; ?>">DELETE</td>
    </tr>
    <?php } ?>
    


</table>
<?php } ?>

</body>
</html>