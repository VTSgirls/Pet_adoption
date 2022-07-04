<?php

session_start();
include("../login/functions.php");
if (!isset($_SESSION['username']) && isset($_SESSION['login'])) {
    header("Location: index.php");
}
else if (isset($_POST['logout'])){
    session_destroy();
    header('location:/adoption/index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Forms</title>
</head>
<body>
<main class="main_role">
    <h1 style="text-align: center">Pending forms for approval</h1>
    <section class="jumbotron text-center">
        <div class="container">
            <?php
            $query = "select * from `form`;";

            if(count(fetchAll($query))>0){
                foreach(fetchAll($query) as $row){
                    ?>
                    <table>
                        <tr>
                        <th>Name and surname</th><th>Address</th><th>Phone number</th><th>Picked pet</th><th>Pet meaning</th></tr>
                        <tr>
                        <th><?php echo $row['name_surname'] ?></th>
                        <th><?php echo $row['address'] ?></th>
                        <th><?php echo $row['phone_number'] ?></th>
                        <th><?php echo $row['picked_pet'] ?></th>
                        <th><?php echo $row['pet_meaning'] ?></th>
                        </tr>
                    </table>
                        <a href="./forms/accept.php?id=<?php echo $row['id'] ?>" class="btn btn-primary my-2">Accept</a>
                        <a href="./forms/reject.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary my-2">Reject</a>

                    <?php
                }
            }else{
                echo "No Pending Requests.";
            }
            ?>

        </div>
    </section>
</main>
<div id="sidenav" class="sidenav">
    <h1><i class="fa fa-user-circle"></i></h1>
    <br><br>
    <hr>
    <a href="new_post.php">Add new post</a>
    <hr>
    <a href="index.php">User details</a>
    <hr>
    <a href="forms.php">Forms</a>
    <script>
        function myFunction() {
            var x = document.getElementById("sidenav");
            if (x.className === "sidenav") {
                x.className += " responsive";
            } else {
                x.className = "sidenav";
            }
        }</script>
    <hr>
    <div class="logout">
        <?php
        if(isset($_POST['logout'])){
            session_destroy();
            header('location:/adoption/index.php');
        }
        ?>
        <form method="post">
            <button name="logout" class="btn btn-danger my-2" >Logout</button>
        </form>
    </div>
</div>

</body>
</html>