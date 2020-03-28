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
<nav>
<?php
    include "nav.php";
?>
</nav>
<section>
<?php
    echo "<h3>Welcome</h3> <hr>";
    echo "<b>Hello and welcome to our website <br> You'll find all the databases, advices, Consults and even info on Medical supplies!! We're an organization mainly focussed on helping the people. This website is created mainly for connecting people with the best clinics nearby! :) <br> So, feel free to navigate the website,people!</b>";
?>
</section>
<article>    
    <marquee>To seek any medical help, kindly go to the link tab!!</marquee>
    <iframe src="https://experience.arcgis.com/experience/685d0ace521648f8a5beeeee1b9125cd"></iframe>
     <p>This map shows the current stats about the pandemic COVID-19</p>
    </article>
<footer>
    <?php
        include "foot.php";
    ?>   
</footer>         
</body>
</html>