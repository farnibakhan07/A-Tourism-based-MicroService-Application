<?php
$server_name="localhost";
$db_name="microservice";
$user_name="root";
$password="";
$con=mysqli_connect($server_name,$user_name,$password,$db_name);

   if(!$con)
   {
    die("Connection failed: " . mysqli_connect_error());
   }
  
?>