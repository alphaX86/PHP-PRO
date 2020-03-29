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
<article>
    Welcome to the MED info page! Here, you can get info on our research milestones, access to databases, and much more!!
    <h4>Databases</h4>
    <hr>
    Here you can find any info on infections, viruses etc
    <?php
        echo '<br><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019">SARS-Cov2</a><br>
        <a href="https://www.who.int/data/gho/data/themes/hiv-aids/GHO/hiv-aids">HIV</a><br>
        <a href="https://www.who.int/data/gho/data/themes/malaria/GHO/malaria">Malaria</a><br>
        <a href="https://www.who.int/health-topics/ebola/#tab=tab_1">Ebola</a><br>
        <a href="https://www.who.int/news-room/q-a-detail/asthma">Asthma</a><br>
        <a href="https://www.who.int/ith/diseases/sars/en/">SARS</a><br>
        <a href="https://www.who.int/emergencies/mers-cov/en/">MERS</a><br>
        <a href="https://www.who.int/health-topics/">and much more.....</a><br>';

    ?>
    <img src="https://pngimg.com/uploads/virus/virus_PNG20.png" height="200px" width="300px" class="center">
    <h4>News</h4>
    <hr>
    <marquee>COVID-19 Vaccine found! But may take 12 months to implement!!</marquee>
    <marquee>You can see the live stats now in below RSS feeds!!</marquee>
    <p>Taken from WHO RSS feed data and live stats map</p>
    <section>    
    <iframe src="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/media-resources/press-briefings"></iframe>
    <h2>Nutrition</h2>
    <hr>
    Nutrition is a critical part of health and development. Better nutrition is related to improved infant, child and maternal health, stronger immune systems, safer pregnancy and childbirth, lower risk of non-communicable diseases (such as diabetes and cardiovascular disease), and longevity.

Healthy children learn better. People with adequate nutrition are more productive and can create opportunities to gradually break the cycles of poverty and hunger.

Malnutrition, in every form, presents significant threats to human health. Today the world faces a double burden of malnutrition that includes both undernutrition and overweight, especially in low- and middle-income countries.

WHO is providing scientific advice and decision-making tools that can help countries take action to address all forms of malnutrition to support health and wellbeing for all, at all ages.

This fact file explores the risks posed by all forms of malnutrition, starting from the earliest stages of development, and the responses that the health system can give directly and through its influence on other sectors, particularly the food system.
    
<br>
<img src="https://cdn1.sph.harvard.edu/wp-content/uploads/sites/30/2018/11/shutterstock_723278326-1200x882.jpg" height="200px" width="300px">
<br>
<p>Now after this info, you may ask what are the other types of traditional medicines that some countries follow... Well,here they are!!</p>

<p>Many different areas make up the practice of complementary and alternative medicine (CAM). In addition, many parts of one field may overlap with the parts of another field. For example, acupuncture is also used in conventional medicine. In the U.S., CAM is used by about 38% of adults and 12% of children. Examples of CAM include:

Traditional alternative medicine:<br>
 This field includes the more mainstream and accepted forms of therapy, such as acupuncture, homeopathy, and Oriental practices. These therapies have been practiced for centuries worldwide. Traditional alternative medicine may include:</p>

<ul>
    <li>Acupuncture</li>
    <li>Ayurveda</li>
    <li>Homeopathy</li>
    <li>Naturopathy</li>
    <li>Chinese or Oriental medicine</li>
</ul>
<br>
<img src="https://www.artofliving.org/sites/www.artofliving.org/files/styles/blog_promoted_featured/public/unity2/blog_image/Top-10-Ayurveda-Herbs-You-Cannot-Miss.jpg?itok=My4DzWQB" height="200px" width="300px">
<br>
<p>Body:<br>
     Touch has been used in medicine since the early days of medical care. Healing by touch is based on the idea that illness or injury in one area of the body can affect all parts of the body. If, with manual manipulation, the other parts can be brought back to optimum health, the body can fully focus on healing at the site of injury or illness. Body techniques are often combined with those of the mind. Examples of body therapies include:</p>

<ul>
    <li>Chiropractic and osteopathic medicine</li>
    <li>Massage</li>
    <li>Body movement therapies</li>
    <li>Tai chi</li>
    <li>Yoga</li>
</ul>
<br>
<img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F04%2F16045734%2Fbenefits-yoga-feature.jpg" height="300px" width="200px">
<br>
<p>Well, these are some types of alternative medicine. This is just for information ONLY</p>

</section>
</article>
<footer>
    <?php
        include "foot.php";
    ?>   
</footer>         
</body>
</html>
