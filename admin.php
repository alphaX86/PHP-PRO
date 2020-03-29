<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include "log.php";
        
        if(!(($_POST['user']==='admin') && ($_POST['pass']==='1234')))
        {
            die('Incorrect username or password!! If error persists, contact ADMIN');
        }
        include "DBConnect.php";
        echo " <h2>ADMIN Page</h2>";
        echo '<br>'. date('m/d/Y h:i:s a', time()).'<br>';
        echo '<hr>';
        $conn=mysqli_connect($mysql_host,$mysql_user);
        mysqli_select_db($conn,'usr');
        $sql="SELECT * from usr";
        $res=$conn->query($sql);
        if(mysqli_num_rows($res)>0){
                        echo "<table border=1>";
                        echo "<tr>";
                        echo "<th>ID</th> <th>Name</th> <th>Age</th> <th>Phone</th> <th>Email</th> <th>PIN</th> <th>Age>60</th> <th>COV-SYM</th> <th>APOT</th>";
                        echo "</tr>";
                    while($row=mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>".$row['ID']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['age']."</td>";
                        echo "<td>".$row['ph']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['pin']."</td>";
                        echo "<td>".$row['a6']."</td>";
                        echo "<td>".$row['cov']."</td>";
                        echo "<td>".$row['app']."</td>";
                    }
                    echo "</table>";
                    mysqli_free_result($res);
                }
                else{
                    echo "No matching records were found!!";
                }
    ?>
    <a href="Home.php">LOGOUT -></a>

</body>
</html>