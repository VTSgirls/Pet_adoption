<?php
include 'header.php';
include 'db_config.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="adoption.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <title>Adoption</title>
</head>

<body>

<div class="container">

    <h3>Adoption</h3>

    <div id="myBtnContainer">
        <label for="pets" class="label">I'm looking for a...</label>
        <button class="btn" onclick="filterSelection('dogs')">Dog</button>
        <button class="btn" onclick="filterSelection('cats')">Cat</button>
    </div>
    <br>
    <div class="container">
        <?php
        $sql = "SELECT id_breed, type, name, age, characteristics, story, image FROM pets WHERE type='dog'";
         $connection = databaseConnect();
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
        echo '<table class="filterDiv dogs">';
            echo '<th>Dogs</th><th>Name</th><th>Age</th><th>Characteristics</th><th>Story</th></tr>';
            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            echo '<tr>';
                echo '<td><img class="images-table" src="'.$row['image'].'" alt="image '.$row['image'].'"></td>';
                echo '<td>'.$row['name'].'</td>';
                echo '<td>'.$row['age'].'</td>';
                echo '<td>'.$row['characteristics'].'</td>';
                echo '<td>'.$row['story'].'</td>';
                echo '</tr>';
            }
            echo '</table>';
        }?>
        <?php
        $sql = "SELECT id_breed, type, name, age, characteristics, story, image FROM pets WHERE type='cat'";
        $connection = databaseConnect();
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo '<table class="filterDiv cats" >';
            echo '<th>Cats</th><th>Name</th><th>Age</th><th>Characteristics</th><th>Story</th></tr>';
            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                echo '<tr>';
                echo '<td><img class="images-table" src="'.$row['image'].'" alt="image '.$row['image'].'"></td>';
                echo '<td>'.$row['name'].'</td>';
                echo '<td>'.$row['age'].'</td>';
                echo '<td>'.$row['characteristics'].'</td>';
                echo '<td>'.$row['story'].'</td>';
                echo '</tr>';
            }
            echo '</table>';
        }?>
        <?php $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));?>
    </div>
    <script>
    function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
    for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
    }

    // Show filtered elements
    function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
    element.className += " " + arr2[i];
    }
    }
    }

    // Hide elements that are not selected
    function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
    arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
    }
    element.className = arr1.join(" ");
    }

    // Add active class to the current control button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
    });
    }
    </script>
</div>
<?php
include 'footer.php';
?>
</body>
</html>