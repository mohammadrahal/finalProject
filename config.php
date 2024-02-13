<?php
$localhost ="localhost";
$user = "root";
$password = "";
$dbName= "library";
$conn = mysqli_connect($localhost, $user, $password, $dbName);

if(!$conn){  
        die('Could not connect: ' . mysqli_error());  
      }  
      // echo 'WOWOWOWOW Connected successfully';  
      mysqli_close($conn); 

?>