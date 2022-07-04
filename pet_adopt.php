<?php
include 'header.php';
include 'db_config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="pet_adopt.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <title>Adopt a pet!</title>

</head>
<body>
<div class="container">

    <?php
    $connection = mysqli_connect(CONFPARAMS[0], CONFPARAMS[1], CONFPARAMS[2], CONFPARAMS[3]);
    $sql = "SELECT title, text, image FROM pet_adopt";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<br> ". $row["title"]. "<br><br>" . " " . $row["text"] .  "<br><br><br>";
            echo '<div class="card_image">
        <img class="card_image" src="'.$row['image'].'" alt="image '.$row['image'].'">
            </div>';
        }
    } else {
        echo "0 results";
    }

    $connection->close();
    ?>
    <br><br><br>
<?php
include 'footer.php';
?>
</div>
</body>
</html>