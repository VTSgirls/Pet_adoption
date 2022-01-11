<?php
include 'header.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="adoption.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
    <title>Adoption</title>
</head>

<body>

<div class="container">

    <h3>Adoption</h3>

    <label for="pets" class="label">I'm looking for a...</label>
    <select name="pets" class="pets">
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
    </select>


    <div class="images1">
        <img src="Images/Jackie.jpg" height="250px" width="250px">
        <img src="Images/Piper.jpg" height="250px" width="250px">
        <img src="Images/Gus.jpg" height="250px" width="250px">
    </div>
    <div class="images2">
        <img src="Images/Elsa.jpg" height="250px" width="250px">
        <img src="Images/Buddy.jpg" height="250px" width="250px">
        <img src="Images/Kippie.jpg" height="250px" width="250px">

    </div>


</div>
<?php
include 'footer.php';
?>
</body>
</html>