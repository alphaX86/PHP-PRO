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
<aside>
    <?php
        include "quick.html";
    ?>
</aside>
<section>
<?php
    echo "<h3>Welcome</h3> <hr>";
    echo "<b>Hello and welcome to our website <br> You'll find all the databases, advices, Consults and even info on Medical supplies!! We're an organization mainly focussed on helping the people. This website is created mainly for connecting people with the best clinics nearby! :) <br> So, feel free to navigate the website,people!</b>";
?>
</section>
<article>    
    <marquee>To seek any medical help, kindly go to the link tab!!</marquee>
    <iframe src="https://covid19.who.int/"></iframe>
     <p>This map shows the current stats about the pandemic COVID-19</p>
    </article>
<article>
    <h2>Overview</h2>
    At ESC Health, we are taking systematic steps to evolve the way we deliver healthcare. For the past several years, innovation has been a central strategy for moving EHS forward.<br>
    In its 10-years, ESC Health evolved from a small county hospital serving the area's medical needs. From its inception in 2010 as Bartholomew County Hospital, the health system has grown to serve 10 Cities. However, its mission remains the same: to improve the health and well-being of those it serves.
    </article>
    <img src="https://antonovich-design.ae/uploads/gallery/2018/1/thumb2018ajSrhpUYm03W.jpg" height="200px" width="200px"><img src="https://antonovich-design.ae/uploads/gallery/2018/1/thumb2018xINyzO1zdeGl.jpg" height="200px" width="200px"><img src="https://antonovich-design.ae/uploads/gallery/2018/1/thumb2018BKOaC1F7NeXn.jpg" height="200px" width="200px">
<article>
    <h3>Why Health Service??</h3>
    <hr> 
Health service delivery systems that are safe, accessible, high quality, people-centred, and integrated are critical for moving towards universal health coverage. Service delivery systems are responsible for providing health services for patients, persons, families, communities and populations in general, and not only care for patients. While patient-centred care is commonly understood as focusing on the individual seeking care (the patient), people-centred care encompasses these clinical encounters and also includes attention to the health of people in their communities and their crucial role in shaping health policy and health services.
Service delivery systems should also consider the whole spectrum of care from promotion and prevention to diagnostic, rehabilitation and palliative care, as well all levels of care including self-care, home care, community care, primary care, long-term care, hospital care, in order to provide integrated health services throughout the life course.
That's why we,ESC Health is implemented!!
    </article>
<footer>
    <?php
        include "foot.php";
    ?>   
</footer>         
</body>
</html>