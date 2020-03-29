<?php 
// this php script is for connecting with database 
// data have to fetched from local server 
$mysql_host = 'localhost'; 
  
// user name is root 
$mysql_user = 'root'; 
  
// function to connect with database having  
// argument host and user name 
if (!mysqli_connect ($mysql_host, $mysql_user)) 
{ 
    die('Cannot connect to database'); 
} 
else
{ 
    $conn=mysqli_connect($mysql_host,$mysql_user,"");
    // database name is user 
    $conn->query('CREATE DATABASE usr');
    if (mysqli_select_db($conn,'usr')) 
    { 
        echo "<br>Connection to server Success!<br>"; 
    } 
    else
    { 
        die('Cannot connect to database'); 
    } 
    
} 
?> 