<?php
include 'header.php';
include 'db_config.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn more</title>
    <link rel="stylesheet" href="learn_more.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <?php
    $sql = "SELECT id, title, text, image, redirection FROM learn_more";
    $connection = databaseConnect();
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        echo '<div class="card" id="'.$row['redirection'].'">
    <div class="card_image">
        <img src="'.$row['image'].'" alt="cover '.$row['image'].'">
    </div>
        <div class="card_text">
            <h2>'.$row['title'].'</h2><br><br>
            <p>' .$row['text'].'</p>
            </div></div>';
    } } ?>
<?php
include 'footer.php';
?>
</body>