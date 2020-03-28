<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>ESC Health Services</h1>
</header>
<nav>
<?php
    include "nav.php";
?>
</nav>
<?php 
require 'DB.php';
if((isset($_POST['n'])&& $_POST['ag'] !='') && (isset($_POST['ph'])&& $_POST['em'] !=''))
{
 $conn=mysqli_connect ($mysql_host, $mysql_user);
 mysqli_select_db($conn,'usr');
 $txt='CREATE TABLE usr ( `ID` INT(3) NOT NULL AUTO_INCREMENT , `name` VARCHAR(40) NOT NULL , `age` INT(2) NOT NULL , `ph` VARCHAR(10) NOT NULL , `email` VARCHAR(50) NOT NULL , `pin` INT(10) NOT NULL , `a6` INT(1) NOT NULL , `cov` INT(1) NOT NULL , `app` INT(1) NOT NULL , PRIMARY KEY (`ID`))';
 $conn->query($txt);
 $yourName = $conn->real_escape_string($_POST['n']);
$yourEmail = $conn->real_escape_string($_POST['em']);
$yourPhone = $conn->real_escape_string($_POST['ph']);
$age = $conn->real_escape_string($_POST['ag']);
$pin = $conn->real_escape_string($_POST['pin']);
$a6 = $conn->real_escape_string($_POST['a6']);
$cov = $conn->real_escape_string($_POST['cov']);
$app = $conn->real_escape_string($_POST['app']);
$sql="INSERT INTO usr (name,age,ph,email,pin,a6,cov,app) VALUES ('".$yourName."','".$age."', '".$yourPhone."', '".$yourEmail."' , '".$pin."' , '".$a6."' , '".$cov."' , '".$app."')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon<br> <i>For Security reasons, don't press the back or refresh button!!</i>";
}
}
else
{
echo "Please fill all details and try again!!<br>";
}
?>

<footer>
    <?php
        include "foot.php";
    ?>   
</footer>         
</body>
</html>
