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
<div class="form">
<b><u>Kindly fill the form for any medical help!!</u></b><br>
<h4 style="text-align: center;">Form</h4>
<span class="error">* field </span>required
<form name="MED" action="we.php" method="POST">
    <b>Name:</b><span class="error">*</span><br>
    <input type="text" name="n"><br>
    <b>Age:</b><span class="error">*</span><br>
    <input type="number" name="ag"><br>
    <b>Phone no:</b><span class="error">*></span><br>
    <input type="number" name="ph"><br>
    <b>E-mail:</b><span class="error">*</span><br>
    <input type="email" name="em"><br>
    <b>Address:</b><br>
    <textarea name="ad" rows="5" cols="5"></textarea><br>
    <b>PinCode:</b><span class="error">*</span><br>
    <input type="number" name="pin"><br>
    <b>Country:</b><br>
    <input type="text" name="co"><br>
    <fieldset>
        <legend><b>Medical info</b></legend>
        <b>Are you older than 60?</b><br>
        <input type="radio" name="a6" value="1">Yes
        <input type="radio" name="a6" value="0">No <br>
        <b>Were you been to any countries before? (After Feb '20)</b><br>
        <select name="cov">
            <option value="1">China</option>
            <option value="2">South Korea</option>
            <option value="3">Iran</option>
            <option value="4">Italy</option>
            <option value="5">US</option>
            <option value="6">Spain or EU countries</option>
            <option value="0">None</option>
        </select>
        <br>
        <b>Do you have any symptoms??</b><br>
        <input type="checkbox" name="1">Fever
        <input type="checkbox" name="2">Dry cough
        <input type="checkbox" name="3">Sore throat
        <input type="checkbox" name="4">Tiredness
    </fieldset>
    <b>Do you want an appointment?</b><br>
    <input type="radio" name="app" value="1">Yes
    <input type="radio" name="app" value="0">No 
    <br>
    <input type="submit">
</form>
<u>NOTE:If you've filled the form, please standby for at most 6 hours</u>

<footer>
    <?php
        include "foot.php";
    ?>   
</footer>         
</body>
</html>