<html>
    <head>
        <title> webpage-4 </title>
        <style>

            </style>
</head>
<body>
    <?php
$link = mysqli_connect("localhost","root","","company");
//check connection
if($link===false){
    die("Error:could not connect" . mysqli_connect_error());
}
//escape user inputs for security
$movid = mysqli_real_escape_string($link,$_REQUEST['s2']);
$movname = mysqli_real_escape_string($link,$_REQUEST['s3']);
$realese = mysqli_real_escape_string($link,$_REQUEST['s4']);
$profit = mysqli_real_escape_string($link,$_REQUEST['s5']);
$loss = mysqli_real_escape_string($link,$_REQUEST['s6']);
$sql = "INSERT INTO ibm(mov_id,MOV_NAME,REALESE_YEAR,PROFIT,LOSS) values($movid,'$movname','$realese',$profit,$loss)";
if(mysqli_query($link,$sql)){
    echo "data inserted successfully";
 }else{
     echo "Error:could not inserted data" . mysqli_error($link);
 }
 mysqli_close($link);



?>
</body>
</html>