<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="slideshow-container">
    <div class="mySlides fade">
        <h1 class="text1">Why adoption?</h1>
        <button class="button1" onclick="document.location='learn_more.php#one'">READ MORE</button>
        <img src="Images/cover.jpg" alt="cover" style="width:100%">
    </div>

    <div class="mySlides fade">
        <h1 class="text2">Dog and cat relationship</h1>
        <button class="button2" onclick="document.location='learn_more.php#two'">READ MORE</button>
        <img src="Images/dog_cat_cuddle.jpg" alt="dog_cat_cuddle" style="width:100%">
    </div>

    <div class="mySlides fade">
        <h1 class="text3">Pets are our best friends</h1>
        <button class="button3" onclick="document.location='learn_more.php#three'">READ MORE</button>
        <img src="Images/dog_owner.jpg" alt="dog_owner" style="width:100%">
    </div>

    <div class="mySlides fade">
        <h1 class="text4">Things to know before adopting a puppy</h1>
        <button class="button4" onclick="document.location='learn_more.php#four'">READ MORE</button>
        <img src="Images/puppies.jpg" alt="puppies" style="width:100%">
    </div>

    <div class="mySlides fade">
        <h1 class="text5">Tips for working from home with a pet</h1>
        <button class="button5" onclick="document.location='learn_more.php#five'">READ MORE</button>
        <img src="Images/dog_work.jpg" alt="dog_work" style="width:100%">
    </div>

</div>
<br>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 5 seconds
    }
</script>
<div id="about_us" class="about_us">
    <h2>ABOUT US</h2>
    <p>A great place to find your new best friend for life and joy.<br><br>
        High Street 50, UK<br><br>
        +44 0983 455983<br><br>
        petsadoption@gmail.com<br><br>
        Mon - Sat: 6.30am - 10.00pm<br><br>
        <br><br>
    </p>
</div>
<?php
include 'footer.php';
?>
</body>

