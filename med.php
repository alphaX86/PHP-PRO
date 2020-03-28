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
    <h4>News</h4>
    <hr>
    <marquee>COVID-19 Vaccine found! But may take 12 months to implement!!</marquee>
    <marquee>You can see the live stats now in below RSS feeds!!</marquee>
    <p>Taken from WHO RSS feed data and live stats map</p>
    <section>
    <?php
        echo' <!-- start sw-rss-feed code --> 
        <script type="text/javascript"> 
        <!-- 
        rssfeed_url = new Array(); 
        rssfeed_url[0]="https://who.int"; rssfeed_url[1]="https://www.who.int/feeds/entity/csr/don/en/rss.xml"; rssfeed_url[2]="https://www.who.int/rss-feeds/news-english.xml";  
        rssfeed_frame_width="230"; 
        rssfeed_frame_height="260"; 
        rssfeed_scroll="on"; 
        rssfeed_scroll_step="6"; 
        rssfeed_scroll_bar="off"; 
        rssfeed_target="_blank"; 
        rssfeed_font_size="12"; 
        rssfeed_font_face=""; 
        rssfeed_border="on"; 
        rssfeed_css_url="https://feed.surfing-waves.com/css/style6.css"; 
        rssfeed_title="on"; 
        rssfeed_title_name=""; 
        rssfeed_title_bgcolor="#3366ff"; 
        rssfeed_title_color="#fff"; 
        rssfeed_title_bgimage=""; 
        rssfeed_footer="off"; 
        rssfeed_footer_name="rss feed"; 
        rssfeed_footer_bgcolor="#fff"; 
        rssfeed_footer_color="#333"; 
        rssfeed_footer_bgimage=""; 
        rssfeed_item_title_length="50"; 
        rssfeed_item_title_color="#666"; 
        rssfeed_item_bgcolor="#fff"; 
        rssfeed_item_bgimage=""; 
        rssfeed_item_border_bottom="on"; 
        rssfeed_item_source_icon="off"; 
        rssfeed_item_date="off"; 
        rssfeed_item_description="on"; 
        rssfeed_item_description_length="120"; 
        rssfeed_item_description_color="#666"; 
        rssfeed_item_description_link_color="#333"; 
        rssfeed_item_description_tag="off"; 
        rssfeed_no_items="0"; 
        rssfeed_cache = "56e5b78cf8cd0f01753df45d59376623"; 
        //--> 
        </script> 
        <script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
        <!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
        <div style="color:#ccc;font-size:10px; text-align:right; width:230px;">powered by <a href="https://surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;">Surfing Waves</a></div> 
        <!-- end sw-rss-feed code --> ';
        
    ?>    
    <iframe src="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/media-resources/press-briefings"></iframe>
    </section>
</article>
<footer>
    <?php
        include "foot.php";
    ?>   
</footer>         
</body>
</html>
