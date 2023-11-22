<?php
   /* //how to open the file
   //the syntax is - fopen(filename,mode)//this the way the function using file open .
   $check = "simple.txt";

    //the data type  of variable is resource 
     if(file_exists($check)) {      //lets write a code those file is exist or not is really 
        $handle = fopen($check,"r");
     } else{
        echo "error : the file does not exist";
     }                       
*/
?>

<br>

<?php 
  // to use die function
$check = "simple.txt";
if(file_exists($check)) {     
    $handle = fopen($check,"r") or die("error: the file is  not exist");
//some code execute
fclose($handle);   //how to close a file by fclose function

 }  else{
    echo "error: the file does not exist";
 }                  

?>
<br>
<?php          //how can i read the file i,e we can opening the file read only mode
    /*           //the function is fread(),readfile(),file_get_contents(),file(), these are four function to open the file
 $check = "sample.txt";
 if(file_exists($check)) {     
    $handle = fopen($check,"r") or die("error: the file is  not exist");
    //read fixed number of files from the bytes
    //$content = fread($check,"20");
    //closing the file handling
    //fclose($check);  
    //display the file content how can i do that
    //echo $content;
 }else{
    echo "error: the file does not exist";

 }




?>


<br>
<?php          //how can i read the file i,e we can opening the file read only mode
               //the function is fread(),readfile(),file_get_contents(),file(), these are four function to open the file
 $check = "sample.txt";
 if(file_exists($check)) {     
    $handle = fopen($check,"r") or die("error: the file is  not exist");
    //read fixed number of files from the bytes
    //$content = fread($check,filesize($check));
    //closing the file handling
    //fclose($check);  
    //display the file content how can i do that
    //echo $content;
 }else{
    echo "error: the file does not exist";

 }


?>

<br>
<?php         
 $file = "sample.txt";
 if(file_exists($file)) {     
    readfile($file,"r") or die("error: the file is  not exist");
    
 }else{
    echo "error: the file does not exist";

 }
?>
<br><br>
<?php  //next function file_get_contents()       
 $file = "sample.txt";
 if(file_exists($file)) {     
    $x1 = file_get_contents($file,"r") or die("error: the file is  not exist");
    echo $x1;
    
 }else{
    echo "error: the file does not exist";

 }
?>

<br><br>
<?php  //next function file()  //it returns each element is an array of lines      
 $file = "sample.txt";
 if(file_exists($file)) {     
    $arr1 = file($file) or die("error: the file is  not exist"); //arr1 is array variable 
   // how to dispaly the content 
foreach($arr1 as $x) {  //just an alius
 echo $x;
} 

 }else{
    echo "error: the file does not exist";

 }
?>

<br><br>
<?php  //how to writting a file we can use a function fwrite(),file_put_contents()  ;   
 $file = "sample.txt";
 $data = "welcome to odisha";
//open the file for writting
$ibm = fopen($file,"w") or die("error: the file is does not exist");
//write data to the file how can i do that
fwrite($ibm,$data) or die("error: the file can not exist ");
//next close the handle
fclose($ibm);
echo "data written into the file successfully";

 
?>


<br><br>
<?php  //how to writting a file we can use a function fwrite(),file_put_contents()  ;   
 $file = "sample.txt";
 $data = "ba ba black sheep.haveyou any wool";
//open the file for writting
$ibm = fopen($file,"w") or die("error: the file is does not exist");
//write data to the file how can i do that
file_put_contents($file,$data) or die("error: the file can not exist ");
//next close the handle
fclose($ibm);
echo "data written into the file successfully";

 
?>


<br><br>
<?php  //how to rename the file 
 $file = "sample.txt";
 //check for existance
 if(file_exists($file)){ //if it is exist it will attempt to rename
    if(rename($file,"wrimes.txt")){ // then we should print file renamed successfully
    echo "file renamed success fully";

 }else{
     echo "file rename not successfully";
 }
}else{

}
?>


<br><br>
<?php  //how to remove  the file  we should use unlink() function 
 $file = "wrimes.txt";
 //check for existance
 if(file_exists($file)){ //if it is exist it will attempt to delete the file 
    if(unlink($file)){ // then we should print file renamed successfully
    echo "file removed success fully";

 }else{
     echo "file can not  remove successfully";
 }
}else{
    echo "file does not exist";
}
*/
?>