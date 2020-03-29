<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>ESC Health Services</h1>
    </header>
    <h2>Admin Login</h2>
    <u>Enter your admin ID and password to see all details of the users registered (in form)</u><br>
    <b>ADMINS ONLY!!!!</b><br>
    <hr>
    <form method="POST" action="admin.php" class="admin">
    <p class="fe">Name:</p><br>
    <input type="text" name="user"><br>
    <p class="fe">Password:</p>
    <input type="password" name="pass"><br>
    <input type="submit">
    <a href="Home.php">GO BACK -></a>
</body>
</html>