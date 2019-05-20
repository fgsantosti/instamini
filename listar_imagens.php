<?php
 
$host = "localhost";
$username = "root";
$password = "";
$db = "instamini";
 
$conn = mysqli_connect($host,$username,$password,$db); 
 
$result=mysqli_query($conn,"SELECT * FROM fotos"); 
 
while($row=mysqli_fetch_object($result)) { 
    Header( "Content-type: image/jpeg");
    echo $row->conteudo; 
    echo "<img src=$row->conteudo \>";
    //echo $row->conteudo; 

} 
 
?>