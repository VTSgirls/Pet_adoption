<?php
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="header.css">
<div class="topnav" id="myTopnav">
    <a href="index.php" class="active">Home</a>
    <a href="index.php#about_us">About us</a>
    <a href="adoption.php">Adoption</a>
    <a href="learn_more.php">Learn more</a>
    <?php
    session_start();

    // Check if user is logged in
    if (isset($_SESSION['username'])) {
        echo ' <a href="login/logout.php">Logout </a>';
    } else {
        echo ' <a href="login/index.php">Login/Sign up </a>';
    }
    ?>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }</script>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
