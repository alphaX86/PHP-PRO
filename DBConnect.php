<?php
   require_once "DB.php";
   $conn=mysqli_connect($mysql_host,$mysql_user);
   mysqli_select_db($conn,'usr');
   $sql='INSERT INTO usr (name,age,ph,email,pin,a6,cov,app) VALUES ("RAJ",33,7548395820,"raj21@gmail.com",650032,0,0,1)';
   $conn->query($sql);
   $q='INSERT INTO usr (name,age,ph,email,pin,a6,cov,app) VALUES ("Kumar",12,7593760243,"kumar_32@yahoo.com",537542,0,3,1)';
   $conn->query($q);
?>
      
   
